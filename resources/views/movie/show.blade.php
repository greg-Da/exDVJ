
@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <img class="imgMovieShow" src="/assets/{{ $movie->avatar }}" />
                    <br/><br><br>
                    <h2 class="titlemovie">{{ $movie->title }}</h2>
                    <br>
                    <p class="mb-4">
                        {{ $movie->story }}
                    </p>
                    <hr class="mb-4" />
                    @include('component.commentsDisplay', ['comments' => $comments, 'post_id' => $movie->id])
   
                    <hr />
                    <h4>Add comment</h4>
                    <form method="POST" action="{{ action('CommentController@store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $movie->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection