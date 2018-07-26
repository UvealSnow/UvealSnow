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
                <p>{{ $index }} - {{ $post->title }}</p>
            @empty
                <p>No articles in this category yet.</p>
            @endforelse
        </div>

        <div class="category__pagination">
            {{ $posts->links() }}
        </div>
    </div>
@endsection