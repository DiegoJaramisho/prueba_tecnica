@extends('layouts.app')
@section('section','inicio')
@section('content')
{{-- <div id="score" class="container col-12 text-center"></div> --}}
<h2 class="text-center pt-5">Puntaje</h2>
<h1 class="text-end pe-3 mb-5">
    <a href="/" class="btn btn-info">Home</a>
</h1>
<div class="px-5">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Puntaje</th>
            </tr>
        </thead>
        <tbody id="puntuacion"></tbody>
    </table>
</div>

@endsection
@section('myscript')
    <script src="{{asset('assets/js/puntuaciones.js')}}"></script>
@endsection
