@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $post->title }}
                    <a class="btn btn-xs btn-warning pull-right" href="{{ url("post/$post->id/edit") }}">Editar</a>
                    <form class="pull-right" action="{{ url("post/$post->id") }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-xs btn-danger">Eliminar</button>
                    </form>
                </div>

                <div class="panel-body">

                    <p class="small">By: {{ $post->user->name }}</p>

                    <p>
                        {{ $post->body }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
