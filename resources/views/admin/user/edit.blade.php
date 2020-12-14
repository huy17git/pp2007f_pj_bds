@extends('admin.master')

@section('title', 'Edit User')

@section('styles')
    <link href="/assets/vendor/selectize/dist/css/selectize.default.css" rel="stylesheet">
    <link href="/assets/vendor/summernote/dist/summernote-bs4.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet">
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Edit User</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Admin</a>
                <a class="breadcrumb-item" href="#">User</a>
                <span class="breadcrumb-item active">Edit User</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header border bottom">
            <h4 class="card-title">Edit User</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-10">

                    <form role="form" id="form-validation" method="post" action="{{ route('updateUser', $user->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">User Name *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Email *</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Password</label>
                            <div class="col-sm-10">
                                <input id="password" type="password" class="form-control" name=""
                                    value="{{ $user->password }}" placeholder="Enter your password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="" placeholder="Enter your password again">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fullname" value="{{ $user->fullname }}"
                                    required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Date 0f Birth</label>
                            <div class="col-sm-10">
                                <div class="icon-input">
                                    <i class="mdi mdi-timer"></i>
                                    <input id="datepicker-1" data-provide="datepicker" type="text" class="form-control"
                                        name="dateofbirth" value="{{ $user->dateofbirth }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phonenumber" value="{{ $user->phonenumber }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">City</label>
                            <select class="form-control col-sm-3 d-inline m-l-15 " id='provices'>
                                <option class="provice" value="0"> Provience </option>
                                @foreach ($provinces as $provice)
                                    <option class="provice" value="{{ $provice->code }}"> {{ $provice->name }} </option>
                                @endforeach
                            </select>
                            <div class="col-sm-1"></div>

                            <select class="form-control col-sm-2 d-inline m-l-35" id='districts'>
                                <option class="district" value="0">District</option>

                            </select>

                            <div class="col-sm-1"></div>

                            <select class="form-control col-sm-2 d-inline m-l-35" id='wards'>
                                <option class="ward">Ward</option>
                            </select>
                        </div>


                        <div class="form-group row"></div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Avatar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="avatar1" value="{{ $user->avatar }}">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label control-label">Gender</label>
                            <div class="col-sm-2" style="padding-top: 12px">
                                <div class="radio d-inline m-r-30">
                                    <input id="basicFormRadio1" name="sex" type="radio" @if ($user->sex == 1)
                                    checked
                                    @endif value="1">
                                    <label for="basicFormRadio1">Male</label>
                                </div>
                                <div class="radio d-inline m-r-15">
                                    <input id="basicFormRadio2" name="sex" type="radio" @if ($user->sex == 0)
                                    checked
                                    @endif value="0">
                                    <label for="basicFormRadio2">Female</label>
                                </div>
                            </div>

                            <div class="col-sm-4 d-inline">
                                <label class="col-sm-5 col-form-label control-label d-inline">Recharge account</label>
                                <div class="col-sm-4 d-inline form-group">
                                    <select class="form-control col-sm-6 d-inline" name="account">
                                        <option class="account" value="0">+ 0 VND</option>
                                        <option class="account" value="10000">+ 10.000 VND</option>
                                        <option class="account" value="20000">+ 20.000 VND</option>
                                        <option class="account" value="50000">+ 50.000 VND</option>
                                        <option class="account" value="100000">+ 100.000 VND</option>
                                        <option class="account" value="200000">+ 200.000 VND</option>
                                        <option class="account" value="500000">+ 500.000 VND</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4 d-inline">
                                <label class="col-sm-3 col-form-label control-label d-inline">Role</label>
                                <div class="col-sm-5 d-inline">
                                    <select class="form-control col-sm-8 d-inline m-l-35" name="role">
                                        <option class="ward" value="1" @if ($user->roles->first()->id == 1)
                                            checked
                                            @endif>Admin</option>
                                        <option class="ward" value="2" @if ($user->roles->first()->id == 2)
                                            checked
                                            @endif>Member</option>
                                    </select>
                                </div>
                            </div>
                        </div>





                        <input type="submit" class="btn btn-gradient-success" value="Edit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/assets/js/forms/form-validation.js"></script>
    <script src="/assets/vendor/moment/min/moment.min.js"></script>
    <script src="/assets/vendor/selectize/dist/js/standalone/selectize.min.js"></script>
    <script src="/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/forms/form-elements.js"></script>
    {{-- jquery-ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".provice").click(function() {
                var id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "/admin/user/ajaxDistrict",
                    data: {
                        parent_code: id
                    },
                    dataType: "html",
                    success: function(data) {

                    }
                }).done(function(data) {
                    $('#districts').html(data);

                });
            });

        });

        function selectDistrict(id) {
            $.ajax({
                type: "get",
                url: "/admin/user/ajaxWard",
                data: {
                    parent_code: id
                },
                dataType: "html",
                success: function(data) {

                }
            }).done(function(data) {
                $('#wards').html(data);

            });
        }

    </script>

@endsection
