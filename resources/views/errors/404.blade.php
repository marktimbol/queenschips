@extends('public.layout.clean')

@section('pageTitle', 'Page not found')

@section('bodyClass', 'page not-found')

@section('content')

	<div class="container">

		<div class="row">
			
			<div class="col-md-2 col-md-offset-1 wow fadeInLeft">
				{!! getPhoto('lamp-post.jpg', 'Lamp Post') !!}
			</div>

			<div class="col-md-8 wow fadeInRight">
				<h2 class="not-found__title">You seem to have upset the delicate internal balance of my housekeeper.</h2>
			</div>

		</div>	

	</div>
	
@endsection

