@extends('admin.master')
@section('title', 'Menu')
@section('content')
<div class="page-header">
    <h2 class="header-title">Menu</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="{{ route('menuIndex') }}">Menu</a>
            <span class="breadcrumb-item active">All Menu</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            @if(session('mess'))
            <p class="alert alert-success">{{ session('mess') }}</p>
            @endif
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>
                            <div class="checkbox p-0">
                                <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                <label for="selectable1"></label>
                            </div>
                        </th>
                        <th>Name</th>
                        <th>Parent_id</th>
                        <th>Slug</th>
                        <th>Order</th>
                        <th>Type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu as $menu)
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="{{ $menu->id }}" type="checkbox" value="{{ $menu->id }}">
                                <label for="{{ $menu->id }}"></label>
                            </div>
                        </td>
                        <td>
                            {{$menu->name}}
                        </td>
                        <td>{{ $menu->parent_id }}</td>
                        <td>{{ $menu->slug }}</td>
                        <td>{{ $menu->order }}</td>
                        <td>{{ $menu->type }}</td>
                        <td class="text-center font-size-18">
                            <a href="{{ route('editMenu', $menu->id) }}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                            <form action="{{ route('deleteMenu', $menu->id) }}" method="POST">
                                <input type="hidden" name="id" value="{!! $menu->id !!}">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <button><i class="ti-trash"></i></button>
                            </form>
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
@endsection