<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Broker;
use App\Business;

class DanhbaController extends Controller
{
    //
    public function index() {
        $brokers = Broker::limit(10)->get();
        return view("pages.danhba.nhamoigioi", compact('brokers'));
    }

    public function index1() {
        $business = Business::limit(3)->get();
        return view ('pages.danhba.doanhnghiep', compact('business'));
    }

    public function singlepost1($id) {
        $brokers = Broker::where('id', '=', $id)->get();
        return view ('pages.danhba.singlepost1', compact('brokers'));
    }

    public function singlepost2($id) {
        $business = Business::where('id', '=', $id)->get();
        return view ('pages.danhba.singlepost2', compact('business'));
    }
}
