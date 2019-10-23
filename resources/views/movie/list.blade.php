@extends('layout')

@section('content')

<img class="headmovie" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1DWdEf2_BSPidWX2VeHuhijGCugaZND-GvYwdBc-fbQ9QXmSd">

<h1>Movies</h1>


@foreach ($movies as $movie)


@endforeach

<div class="container" >
	<div class="row rowbg">
		<div class="col-3">
			<div class="card bg-dark text-white">
				<img src="assets/ballad.png" class="card-img imgmovie" alt="he Ballad of Buster Scruggs">
				<div class="card-img-overlay">
					<h5 class="card-title">The Ballad of Buster Scruggs</h5>
				</div>
			</div>
		</div>

		<div class="col-3">
			<div class="card bg-dark text-white">
				<img src="assets/hailcesar.png" class="card-img imgmovie" alt="Hail, Cesar!">
				<div class="card-img-overlay">
					<h5 class="card-title">Hail, Cesar!</h5>
					
				</div>
			</div>
		</div>

		<div class="col-3">
			<div class="card bg-dark text-white">
				<img src="assets/ballad.png" class="card-img imgmovie" alt="...">
				<div class="card-img-overlay">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text">Last updated 3 mins ago</p>
				</div>
			</div>
		</div>

		<div class="col-3">
			<div class="card bg-dark text-white">
				<img src="assets/ballad.png" class="card-img imgmovie" alt="...">
				<div class="card-img-overlay">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text">Last updated 3 mins ago</p>
				</div>
			</div>
		</div>
	</div>
	<br><br>

	<div class="row">
		<div class="col-3">
			<div class="card bg-dark text-white">
				<img src="assets/ballad.png" class="card-img imgmovie" alt="...">
				<div class="card-img-overlay">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text">Last updated 3 mins ago</p>
				</div>
			</div>
		</div>

		<div class="col-3">
			<div class="card bg-dark text-white">
				<img src="assets/ballad.png" class="card-img imgmovie" alt="...">
				<div class="card-img-overlay">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text">Last updated 3 mins ago</p>
				</div>
			</div>
		</div>

		<div class="col-3">
			<div class="card bg-dark text-white">
				<img src="assets/ballad.png" class="card-img imgmovie" alt="...">
				<div class="card-img-overlay">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text">Last updated 3 mins ago</p>
				</div>
			</div>
		</div>

		<div class="col-3">
			<div class="card bg-dark text-white">
				<img src="assets/ballad.png" class="card-img imgmovie" alt="...">
				<div class="card-img-overlay">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text">Last updated 3 mins ago</p>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection