@extends('admin.master')
@section('title', 'Create New Article')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Create News</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">News</a>
                    <span class="breadcrumb-item active">Create</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header border bottom">
                <h4 class="card-title">Create News</h4>
            </div>
            @if(isset($mess))
                <p class="alert alert-success">{!! $mess !!}</p>
            @endif

            @if(isset($errors))
                @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <form role="form" id="form-validation" action="{!! route('storeNews') !!}" method="post">
                            @csrf
                        <form role="form" id="form-validation">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Title *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" placeholder="Required *">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Type *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="type" placeholder="Required *">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Slug *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="slug" placeholder="Required *">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Content *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="content" placeholder="Required *">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Image Link *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="image_link" placeholder="Required *">
                                </div>
                            </div>
                            <button class="btn btn-gradient-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection