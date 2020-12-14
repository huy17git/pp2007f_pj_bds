@extends('admin.master')

@section('title', 'DashBoard')

@section('styles')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Goals this Month {{ $month }} / {{ $year }}</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="m-b-30">
                        <canvas class="chart" id="goal-chart" style="height: 200px"></canvas>
                    </div>
                    <div class="row m-b-10">
                        <div class="col-10 offset-1">
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">{{ $sales }}</h2>
                                        <span class="status gradient info"></span>
                                        <span class="m-l-10">Sales</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">{{ $reve }} VND</h2>
                                        <span class="status gradient"></span>
                                        <span class="m-l-10">Revenue</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Order</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                    
                
                <div class="table-overflow">
                    <table class="table table-lg">
                        <thead>
                            <tr>
                                <td class="text-dark text-semibold">Customer</td>
                                <td class="text-dark text-semibold">Order ID</td>
                                <td class="text-dark text-semibold">Order Date</td>
                                <td class="text-dark text-semibold">Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $products as $pr)
                            <tr>
                                <td>
                                    <div class="list-media">
                                        <div class="list-item">
                                            <div class="media-img">
                                                <img src="storage/img/users/{{ $users->find($pr->user_id)->avatar }}" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title p-t-10 text-semibold">{{ $users->find($pr->user_id)->username }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $pr->id }}</td>
                                <td>{{ $pr->created_at }}</td>
                                <td> ${{ $pr->post_price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>

@endsection



@section('scripts')

@endsection
