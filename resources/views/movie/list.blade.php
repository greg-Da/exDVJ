@extends('layout')

@section('content')

<h1>Movies</h1>

@foreach ($movies as $movie)
	<img src="data:image/jpeg;base64,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" alt="" data-toggle="tooltip" data-html="true" title="<h2>{{$movie -> title}}</h2> <br> <p>{{$movie -> actors}}</p> <br> <p>{{$movie -> year}}</p> ?> ">


@endforeach

@endsection