@extends('layouts.app', ['active' => $category->uri])

@section('content')
    <div class="category">
        <div class="category__header" style="background-image: url('{{ $category->thumbnail }}');">
            <div class="category__text">
                <h2>{{ $category->name }}</h2>
                <p>{{ $category->description }}</p>
            </div>
        </div>

        <div class="category__posts">
            @forelse($posts as $index => $post)
                <div class="category__post reveal">
                    <div class="category__post-thumbnail" style="background-image: url('{{ $post->thumbnail }}')"></div>
                    <div class="category__post-content">
                        <div class="category__post-meta">
                            <p>
                                <a href="{{ url("/category/$category->uri") }}">{{ $post->category->name }}</a>
                                by <span>{{ $post->user->name }}</span>
                                ({{ $post->created_at->format('d M Y') }})
                            </p>
                        </div>
                        <div class="category__post-description">
                            <a href="{{ url("/$category->uri/$post->uri") }}">
                                <h5>{{ $post->title }}</h5>
                                <p>{{ str_limit($post->medium_abstract, 30, '...') }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No articles in this category yet.</p>
            @endforelse
        </div>

        <div class="category__pagination">
            {{ $posts->links() }}
        </div>
    </div>
@endsection