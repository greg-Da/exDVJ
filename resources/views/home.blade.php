
@extends('layout')

@section('content')
<div>
	<img src="http://www.moviemakerspodcast.com/wp-content/uploads/2014/06/coen-banner-part-2.png" alt="" class="image">


	@include('component/card_carousel')

	<!--ARTICLES-->
	@include('component/articles_card')


	@include('component/round_img')

</div>
@endsection