@extends('public.layout.page')

@section('pageTitle', 'Concept')

@section('bodyClass', 'subpage')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Concept</h2>

				<div class="row center-content">
					<div class="col-md-6 col-xs-12 wow fadeInLeft">
						<h3>The Idea</h3>

						<p>
							Amsterdam is a city of tulips, windmills, museums, bicycles. A city that everyone who visits the witch, with its atmosphere so fascinating. Amsterdam is a city to live and to explore by foot, discovering its narrow streets a must in the international street food: french fries Dutch. QUEEN'S CHIPS was created to bring the world the Dutch style by adding to it a particular authenticity of raw materials to provide an experience related to a concept of street food genuine. By implementing advanced production processes QUEEN'S CHIPS is able to achieve high quality standards and to position itself among industry leaders. QUEEN'S CHIPS is promoting a real trend of international gastronomy and, in balance between tradition and quality, it ensures a fresh product, freshly prepared, able to satisfy the palates of those who love to tease on the street without giving the genuineness . 
							STREET FOOD STYLE. THE TASTE THAT DOES TREND.
						</p>
					</div>

					<div class="col-md-6 col-xs-12 wow fadeInRight">
						{!! getPhoto('the-idea.jpg') !!}
					</div>
				</div>

				<div class="row center-content">
					<div class="col-md-6 col-xs-12 wow fadeInLeft">
						{!! getPhoto('the-product.jpg') !!}
					</div>

					<div class="col-md-6 col-xs-12 wow fadeInRight">
						<h3>The Product</h3>

						<p>
							The potato Dutch has some distinctive features that make it unique: compact texture, flavor and especially suited to be prepared by the method of frying. 
							By leveraging these factors QUEEN'S CHIPS has developed a simple but accurate method of preparation of potatoes using cutting edge fryers manufactured in Holland by Perfecta, the full range of sauces of high quality produced by the Belgian brand Manna and of course the original Dutch potatoes, imported exclusively and always fresh cut.
						</p>
					</div>
				</div>

				<div class="row center-content">
					<div class="col-md-6 col-xs-12 wow fadeInLeft">
						<h3>Street Food</h3>

						<p>
							It is the trend of the moment, already appreciated in major cities around the world street food is expected to become the new culinary trends in our country. During a walk, leaving a local or just for a quick lunch fried potato conquest everyone. QUEEN'S CHIPS offers you the opportunity to enjoy one of the most delicious specialties in an endless combination of flavors inspired by cities around the world.
						</p>
					</div>

					<div class="col-md-6 col-xs-12 wow fadeInRight">
						{!! getPhoto('street-food.jpg') !!}
					</div>
				</div>							
			</div>

		</div>
	</div>

	<p>&nbsp;</p>

@endsection