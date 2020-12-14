@extends('admin.master')

@section('title', 'Trash Posts')

@section('styles')
<link rel="stylesheet" href="/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css" />
@endsection

@section('content')
    
<div class="page-header">
    <h2 class="header-title">Trash</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>User</a>
            <a class="breadcrumb-item" href="#">Post</a>
            <span class="breadcrumb-item active">Trash</span>
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
                        <th>ID</th>
                        <th>Date</th>
                        <th>Post Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr id="post">
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
                                        @foreach($post->image as $image)
                                        <img src="{{ $image->link }}" alt="">
                                        @break
                                        @endforeach
                                    </div>
                                    <div class="info">
                                        <span class="title">{{ $post->title }}</span>
                                        <span class="sub-title">{{ $post->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge badge-pill badge-gradient-success">{{ $post->post_type['name'] }}</span></td>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td> {{ $post->post_price }}</td>
                        <td class="text-center font-size-18">
                        @if (Auth::user()->inRole('admin'))
                        <a href="{!! Route('editPost', $post->id) !!}" class="btn btn-info">Edit</a>
                        <a href="javascript:;" class="btn btn-danger restore" post_id="{!! $post->id !!}">Restore</a>
                        @else
                        <a href="{!! Route('memberEditPost', $post->id) !!}" class="btn btn-info">Edit</a>
                        <a href="javascript:;" class="btn btn-danger restore" post_id="{!! $post->id !!}">Restore</a>
                        @endif
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>       
</div>   
@endsection

@section('scripts')
<script src="/assets/vendor/datatables/media/js/jquery.dataTables.js"></script>
<script src="/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/tables/data-table.js"></script>
<script>
$(document).on('click', '.restore', function () {
            var id_post = $(this).attr('post_id');
            $(this).closest('tr').remove();
            $.ajax({
                type: "get",
                url: "/admin/restore-post",
                data: {post_id: id_post},
                dataType:"html",

                success: function (data) {
                }
            }).done(function () {
                html(data);
            });
        });
</script>
@endsection
