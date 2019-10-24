@section('title', 'Movie')
@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <img class="imgMovieShow" src="/assets/{{ $movie->avatar }}" />
                    <br><br>
                    <p class="mb-4 movieyear">
                        {{ $movie->year }}
                    </p>
                    <br/>
                    <h2 class="titlemovie">{{ $movie->title }}</h2>
                    <br>
                    <h3>Synopsis</h3>
                    <p class="mb-4 movietext">
                        {{ $movie->story }}
                    </p>
                    <h3>Actors</h3>
                    <p class="mb-4 movietext">
                        {{ $movie->actors }}
                    </p>
                    <hr class="mb-4" />
                    @include('component.commentsDisplay', ['comments' => $comments, 'post_id' => $movie->id])
   
                    <hr />
                    @Auth
                    <h4>Add comment</h4>
                    <form method="POST" action="{{ action('CommentController@store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $movie->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                            @else
                            <h3>Register to comment</h3>
                            @endAuth
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection