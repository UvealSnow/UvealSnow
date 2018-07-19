@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Posts - Crear
                </div>

                <div class="panel-body">

                    <form method="POST" action="{{ url("/post") }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Crear</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
