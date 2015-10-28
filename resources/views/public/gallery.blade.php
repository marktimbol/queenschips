@extends('public.layout.page')

@section('pageTitle', 'Gallery')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/samsung-grid.css') }}" />
	<link rel="stylesheet" href="{{ elixir('css/photoswipe.css') }}" />
@endsection

@section('bodyClass', 'subpage')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Gallery</h2>
				
				<section class="grid-wrap">
					
					<div class="grid swipe-right" id="grid">

						<div class="photo-gallery" itemscope itemtype="http://schema.org/ImageGallery">

							<?php $delay=0.2; ?>

							@foreach($galleries as $gallery)

								<figure class="wow fadeInLeft" data-wow-delay="{{ $delay }}s">
									<a href="{{ asset($gallery->photo) }}" data-size="{{ $gallery->photo_size }}">
										<img src="{{ asset($gallery->photo) }}" alt="" class="img-responsive img-thumbnail" />
									</a>                      
								</figure>

								<?php $delay+= 0.1 ?>

							@endforeach

						</div>

					</div>

				</section>

				@include('public.partials._photoswipe')			

			</div>

		</div>
	</div>

@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/samsung-grid.js') }}"></script>
	<script src="{{ elixir('js/photoswipe.js') }}"></script>
@endsection	