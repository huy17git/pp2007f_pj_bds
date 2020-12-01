@extends('admin.master')
@section('title', 'Edit Categories')
@section('styles')

@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">News Manage</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">News</a>
                    <span class="breadcrumb-item active">Edit News</span>
                </nav>
            </div>
        </div>  
        <div class="card">
            <div class="card-body">
                <div class="table-overflow">
                    <table id="dt-opt" class="table table-hover table-xl">
                        <thead>
                            <tr>
                                <th>
                                    <div class="checkbox p-0">
                                        <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                        <label for="selectable1"></label>
                                    </div>
                                </th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news  as $news)
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="selectable2" type="checkbox">
                                        <label for="selectable2"></label>
                                    </div> 
                                </td>
                                <td>
                                    <div class="list-media">
                                        <div class="list-item">
                                            <div class="media-img">
                                            </div>
                                            <div class="info">
                                                <span class="title">{!! $news->title !!}</span>
                                                <span class="sub-title">{!! $news->id !!}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                <td>{!! $news->content !!}</td>
                                <td><img src="{!! $news->image_link!!}" alt="" style="width:300px; heigth:250px"></td>
                                <td> {!! $news->created_at !!}</td>
                                <td class="text-center font-size-18">
                                    <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                    <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>  
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>   


@endsection
@section('scripts')
<script src="/assets/vendor/datatables/media/js/jquery.dataTables.js"></script>
<script src="/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/tables/data-table.js"></script>
@endsection