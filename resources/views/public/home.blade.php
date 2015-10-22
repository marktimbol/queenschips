@extends('public.layout.public')

@section('pageTitle', 'Home')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/sweetalert.css') }}" />
@endsection

@section('content')
	<h1>Home</h1>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/sweetalert.js') }}"></script>
@endsection