@extends('admin.master')
@section('title', 'Create New Menu')
@section('content')
<div class="page-header">
    <h2 class="header-title">Create New Menu</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="{{route('menuIndex')}}">Menus</a>
            <span class="breadcrumb-item active">Create New Menu</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header border bottom">
        <h4 class="card-title">Create New Menu</h4>
        @if(isset($mess))
        <div class="alert alert-success">
            {!! $mess !!}
        </div>
        @endif

        @if(isset($errors))
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {!! $error !!}
        </div>
        @endforeach
        @endif
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-8">
                <form role="form" id="form-validation" action="{{ route('storeMenu') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Required *">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Parent_Id</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="parent_id" placeholder="Required *">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="slug" placeholder="Required *">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Order</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="order" placeholder="Required *">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="type" placeholder="Required *">
                        </div>
                    </div>
                    <button class="btn btn-gradient-success">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/assets/js/forms/form-validation.js"></script>
@endsection