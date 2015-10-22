@extends('public.layout.public')

@section('pageTitle', 'Home')

@section('bodyClass', 'home')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/sweetalert.css') }}" />
@endsection

@section('content')

@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/sweetalert.js') }}"></script>
@endsection