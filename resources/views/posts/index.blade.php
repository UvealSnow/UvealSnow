@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Posts
                    <a class="pull-right" href="{{ url("post/create") }}">Nuevo</a>
                </div>

                <div class="panel-body">

                    @if ($posts->count() > 0)
                        @foreach($posts as $post)
                            <p>
                                <a href="{{ url("post/$post->id") }}">
                                    {{ $post->title }}
                                </a>
                            </p>
                        @endforeach
                    @else
                        <p>No hay posts!</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
