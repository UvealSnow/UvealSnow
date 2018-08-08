@extends('layouts.app', ['active' => $category->uri])

@section('content')
    <div class="post">
        <div class="post__thumbnail" style="background-image: url('{{ $post->thumbnail }}');"></div>
        <div class="post__metadata">
            <p>
                <a href="{{ url("/$category->uri") }}">{{ $category->name }}</a>
                {{ $post->created_at->format('d M Y') }} <br>
                by: <span>{{ $post->user->name }}</span>.
                <a class="right" href="#comment-section">{{ count($post->comments) < 20 ? count($post->comments) : '20+' }} Comments</a>
            </p>
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="post__content">
            <p>{!! nl2br($post->body) !!}</p>
        </div>

        <div class="post__comments" id="comment-section">
            <h1>{{ count($post->comments) < 20 ? count($post->comments) : '20+' }} Comments</h1>

            @forelse($comments as $comment)
                <div class="comment">
                    <p class="comment__metadata">
                        <span>{{ $comment->name }}</span>
                        <span class="date">{{ $comment->created_at->format('d M Y') }}</span>
                    </p>
                    <p>{!! nl2br($comment->body) !!}</p>
                </div>
            @empty
                <p>No comments have been added yet.</p>
            @endforelse

            @if ($post->comments->count() > 20)
                <div class="all-comments">
                    <a href="{{ url("/$category->uri/$post->uri/comments") }}">
                        See all comments
                    </a>
                </div>
            @endif

            <div class="comment__form">
                <h1>Join in</h1>

                <form method="POST" action="{{ url("/$category->uri/$post->uri/comment") }}">
                    <div class="form-group">
                        <label>Full name</label>
                        <input class="form-control" type="text" name="fullname" placeholder="Your name (This WILL be public)" required="true">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Your name (This WON'T be public)" required="true">
                    </div>

                    <div class="form-group">
                        <label>Comment</label>
                        <textarea rows="5" class="form-control" placeholder="Type your comment here..."></textarea>
                    </div>

                    <div class="form-group">
                        <button class="form-control">Add comment</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
