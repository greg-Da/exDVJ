@extends('layout')

@section('content')

<h1>Movies</h1>

<div class="card hori-cards"">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="..." class="card-img" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				<p class="card-text"><small class="text-muted">{{$movie -> year}}</small></p>
			</div>
		</div>
	</div>
</div>

@endsection