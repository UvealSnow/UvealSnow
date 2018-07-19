@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Posts - Editar
                </div>

                <div class="panel-body">

                    <form method="POST" action="{{ url("/post/$post->id") }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="body">{{ $post->body }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Editar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
