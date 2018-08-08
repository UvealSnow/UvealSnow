@extends('layouts.app', ['active' => $category->uri])

@section('content')
    <div class="post">
        <div class="post__thumbnail reveal" style="background-image: url('{{ $post->thumbnail }}');"></div>
        <div class="post__metadata">
            <p>
                <a href="{{ url("/$category->uri") }}">{{ $category->name }}</a>
                {{ $post->created_at->format('d M Y') }} <br>
                by: <span>{{ $post->user->name }}</span>.
                <a class="right" href="#comment-section">{{ $post->comments->count() }} Comments</a>
            </p>
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="post__content">
            <p>{!! nl2br($post->body) !!}</p>
        </div>

        @include('components.comments')

    </div>
@endsection
