@extends('layouts.app')

@section('ktmspice-admin-content')


    <div class="page-header">
        <h3 class="page-title">
            Meal Item List
        </h3>
        <nav aria-label="breadcrumb">
            <a href="{{url('admin/menus/addnew')}}" class="btn btn-primary btn-sm">Add New Meal Item</a>
        </nav>
    </div>


@stop()
