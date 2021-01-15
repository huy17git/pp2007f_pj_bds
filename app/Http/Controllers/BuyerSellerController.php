<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerSeller;
use App\Models\Province;
use App\Models\BuyerSellerArea;
use App\Models\ImageDemo;
use Illuminate\Support\Facades\Cache;

class BuyerSellerController extends Controller
{
    public function index(Request $request) {
        if(Cache::has('buyer_seller_cache'.'page'.($request->get('page')))){
            // dd(Cache::get('buyer_seller_cache'.($request->get('page'))));
            // Cache::flush('buyer_seller_cache'.'page'.($request->get('page')));
            return Cache::get('buyer_seller_cache'.'page'.($request->get('page')));

        } else {

            $buyersellercost = BuyerSeller::all();
            $provinces = Province::all();
            $buyerSellers=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->paginate(10);
            
            // if ($request->ajax()) {

            //     return view('pages.canmuacanthue.presult', compact('buyersellercost','buyerSellers','provinces'));
            // }
            $buyerSellerCache['page'.$request->get('page')] = view ('pages.canmuacanthue.index',compact('buyersellercost','buyerSellers','provinces'))->render();

                Cache::put('buyer_seller_cache'.'page'.($request->get('page')), $buyerSellerCache['page'.$request->get('page')], 86400);

                return $buyerSellerCache['page'.$request->get('page')];
        }
    }

    public function seller(Request $request) {
        $buyersellercost = BuyerSeller::where('buyer_seller_catergory_id','>',3)->get();
        $provinces = Province::all();
        $buyerSellers=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->where('buyer_seller_catergory_id','>',3)->paginate(10);
        
        if ($request->ajax()) {
            return view('pages.canmuacanthue.presult', compact('buyersellercost','buyerSellers','provinces'));
        }
        return view ('pages.canmuacanthue.index',compact('buyersellercost','buyerSellers','provinces'));
    }
    
    public function buyer(Request $request) {
        $buyersellercost = BuyerSeller::where('buyer_seller_catergory_id','<',4)->get();
        $provinces = Province::all();
        $buyerSellers=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->where('buyer_seller_catergory_id','<',4)->paginate(10);
        
        if ($request->ajax()) {
            return view('pages.canmuacanthue.presult', compact('buyersellercost','buyerSellers','provinces'));
        }
        return view ('pages.canmuacanthue.index',compact('buyersellercost','buyerSellers','provinces'));
    }

    public function post($id) {

        $buyerSeller=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->find($id);
        $buyerSellers=BuyerSeller::all()->where('district_id',$buyerSeller->district_id);
        $provinces = Province::all();

        return view ('pages.canmuacanthue.post',compact('buyerSeller','buyerSellers','provinces'));
    }

    public function search(Request $request) {

        $buyersellercost = BuyerSeller::search($request->search)->get();
        $buyerSellers = BuyerSeller::search($request->search)->paginate(10);
        $provinces = Province::all();

        return view ('pages.canmuacanthue.index',compact('buyerSellers','buyersellercost','provinces'));
    }


}
