@extends('admin.layout.admin')

@section('pageTitle', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    
    @include('admin._statistics')

@endsection	