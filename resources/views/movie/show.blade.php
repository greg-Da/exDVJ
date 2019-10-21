
@extends('layout')

@section('content')
<div class="textmovie">
	<h1 class="head">{{$movie -> title}}</h1>
<div class="row justify-content-center">

            <div class="profile-header-container">
                <div class="profile-header-img">
                    <img class="rounded-circle" src="/public/assets/{{ $movie->avatar }}" />
                    <!-- badge -->
                    
                </div>
            </div>

        </div>
        

			<small class="year">{{$movie -> year}}</small>
		</div>
		<br>
		<div class="col">
			<h3 class="head">Actors</h3>
			<p>{{$movie -> actors}}</p>
		</div>
	</div>
		<h3 class="head">Synopsis</h3>
		<p>{{$movie -> story}}</p>
</div>

@endsection