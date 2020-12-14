@extends('admin.master')

@section('title', 'All Posts')

@section('styles')
    <link rel="stylesheet" href="/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css" />
@endsection

@section('content')

    <div class="page-header">
        <h2 class="header-title">All Posts</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>User</a>
                <a class="breadcrumb-item" href="#">Post</a>
                <span class="breadcrumb-item active">All Post</span>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-overflow">
                    @if (session('mess'))
                        <div class="col-sm-12 bg-danger">
                            <p class="">
                                <strong>{{ session('mess') }}</strong>
                            </p>
                        </div>
                    @endif
                    <table id="dt-opt" class="table table-hover table-xl">
                        <thead>
                            <tr>
                                <th>

                                </th>
                                <th>Title</th>
                                <th>Post Type</th>
                                <th>ID</th>
                                <th>
                                    <div class="col-sm-8">
                                        <div class="icon-input">
                                            <i class="mdi mdi-timer"></i>
                                            <input id="datepicker-1" data-provide="datepicker" type="text"
                                                class="form-control date date1" name="end_date" placeholder="Pick date end">
                                        </div>
                                    </div>
                                </th>
                                <th>Price</th>
                                <th>



                                </th>
                            </tr>
                        </thead>
                        <tbody id="postsc">
                            @foreach ($posts as $post)
                                <tr id="post" value={{ $post->id }}>
                                    <td>
                                        <div class="checkbox">
                                            <input id="selectable2" name="category[]" class="checkbox" type="checkbox"
                                                value={{ $post->id }}>
                                            <label for="selectable2"></label>
                                        </div>
                                        <div class="info">
                                            <span class="sub-title">{{ $post->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td><span
                                            class="badge badge-pill badge-gradient-success">{{ $post->post_type['name'] }}</span>
                                    </td>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->started_at }}</td>
                                    <td> {{ $post->post_price }}</td>
                                    <td class="text-center font-size-18">
                                        @if ($post->type == 1)
                                            <a href="{!!  Route('nhadatban_single_post', $post->id) !!}"
                                                class="btn btn-info">View</a>
                                        @else
                                            <a href="{!!  Route('nhadatchothue_single_post', $post->id) !!}"
                                                class="btn btn-info">View</a>
                                        @endif
                                        {{-- @if (Auth::user()->inRole('admin')) --}}
                                            <a href="{!!  Route('editPost', $post->id) !!}" class="btn btn-info">Edit</a>

                                            <a href="javascript:;" class="btn btn-danger delete"
                                                post_id="{!!  $post->id !!}">Delete</a>
                                            {{-- @else --}}
                                            {{-- <a
                                                href="{!!  Route('memberEditPost', $post->id) !!}"
                                                class="btn btn-info">Edit</a>
                                            <a href="javascript:;" class="btn btn-danger delete"
                                                post_id="{!!  $post->id !!}">Delete</a>
                                        @endif --}}

                                    </td>
                                </tr>
                            @endforeach
                    </tbody>

                    <tr>
                        <td>
                            
                        </td>
                        <td></td>
                        <td>
                        </td>
                        <td></td>
                        <td style="font-size: 30px; font-weight: bold;">Total Price: </td>
                        <td style="font-size: 30px; font-weight: bold;"> {{ $total_price }}</td>
                        <td class="text-center font-size-18">
                        </td>
                    </tr>
                        <th>
                            <div class="checkbox p-0">
                                <input id="selectable1" type="checkbox" class="checkAll"
                                    name="checkDeleteAll" value="0">
                                <label for="selectable1"></label>
                            </div>
                        </th>
                        <th class="font-size-18">
                            <a href="javascript:;" class="btn btn-danger deleteall ml-0">Delete All</a>
                        </th>
                    </table>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <script src="/assets/vendor/datatables/media/js/jquery.dataTables.js"></script>
        <script src="/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
        <script src="/assets/js/tables/data-table.js"></script>
        <script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="/assets/js/forms/form-validation.js"></script>
        <script src="/assets/vendor/moment/min/moment.min.js"></script>
        <script src="/assets/vendor/selectize/dist/js/standalone/selectize.min.js"></script>
        <script src="/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
        <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
        <script src="/assets/js/forms/form-elements.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        @if (Auth::user()->inRole('admin'))
            <script>
                $(document).on('click', '.delete', function() {

                    var id_post = $(this).attr('post_id');
                    $(this).closest('tr').remove();
                    $.ajax({
                        type: "get",
                        url: "/admin/delete-post",
                        data: {
                            post_id: id_post
                        },
                        dataType: "html",

                        success: function(data) {}
                    }).done(function() {
                        html(data);
                    });
                });

                $(document).ready(function() {

                    var categories = [];

                    // Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
                    $('.checkAll').on('change', function(e) {

                        e.preventDefault();
                        categories = []; // reset 

                        $(document).on('click', '.deleteall', function() {
                            $('input[name="category[]"]:checked').each(function() {
                                categories.push($(this).val());
                            });

                            $('input[name="category[]"]:checked').closest('tr').remove();

                            $.ajax({
                                type: "get",
                                url: "/admin/delete-post",
                                data: {
                                    post_id: categories
                                },
                                dataType: "html",

                                success: function(data) {}
                            }).done(function() {
                                html(data);
                            });
                        });

                    });
                });


                $(document).ready(function() {
                    let msr = new Date();
                    let date = msr.getDate();
                    let month = msr.getMonth();
                    let year = msr.getFullYear();
                    let day = date + '/' + month + '/' + year;
                    $('#datepicker-1').val(day);

                });

                $(document).ready(function() {
                    $('.date').blur(function() {
                        var ds = $('.date1').val();

                        $.ajax({
                            type: "get",
                            url: "/member/post/scheduleAjax",
                            data: {
                                date: ds
                            },
                            dataType: "html",
                            success: function(data) {
                                $('#postsc').html(data);
                            }
                        });
                    });
                });

            </script>
        @else
            <script>
                $(document).on('click', '.delete', function() {
                    alert('You are not admin');
                });

            </script>
        @endif

    @endsection
