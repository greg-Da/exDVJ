
@extends('layout')

@section('content')

<h1 class="mov_head">{{$movie -> title}}</h1>

<small>{{$movie -> year}}</small>

<p>{{$movie -> actors}}</p>

<p>{{$movie -> story}}</p>



@endsection