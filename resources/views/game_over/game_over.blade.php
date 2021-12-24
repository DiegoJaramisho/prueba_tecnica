@extends('layouts.app')
@section('section','inicio')
@section('content')
<h1 class="text-center mt-5 p-5 text-danger">
    Game Over
</h1>
<div class="col-12 text-center">
    <a href="/puntuacion" class="btn btn-info mx-2">Ver Puntuacion</a>
    <a href="/" class="btn btn-success mx-2">Reintentar</a>
</div>
@endsection
