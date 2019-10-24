@foreach ($comments as $comment)
<div class="container cardComment">
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <br>
        <strong class="commentUser">{{ $comment->user->username }}</strong>
        <br><br>
        <p>{{ $comment->body }}</p>

        <a href="" id="reply"></a>
        <form method="POST" action="{{ action('CommentController@store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        @include('component.commentsDisplay', ['comments' => $comment->replies])
    </div>
</div>
<br>
@endforeach