@extends('layout')

@section('content')


<br><br>
<h1 class="h1movie">Movies</h1>
<br>
<div class="container" >
	<div class="row width">
			@foreach ($movies as $movie)
			<div class="card bg-dark text-white cardmovie">
				<img src="/assets/{{$movie->avatar}}" class="card-img imgmovie" alt="">
				<div class="card-img-overlay">
					<h5 class="card-title">{{$movie->title}}</h5>
				</div>
			</div>
			@endforeach
	</div>
</div>
<br><br>



@endsection