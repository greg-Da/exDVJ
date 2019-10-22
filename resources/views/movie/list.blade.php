@extends('layout')

@section('content')

<img class="headmovie" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1DWdEf2_BSPidWX2VeHuhijGCugaZND-GvYwdBc-fbQ9QXmSd">

<h1>Movies</h1>


@foreach ($movies as $movie)
<div class="container">
	<div class="card text-white">
		<img src="assets/ballad.png" class="card-img imgmovie" alt="...">
		<div class="card-img-overlay">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			<p class="card-text">Last updated 3 mins ago</p>
		</div>
	</div>
</div>

@endforeach

@endsection