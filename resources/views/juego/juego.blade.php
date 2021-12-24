@extends('layouts.app')
@section('section','inicio')
@section('content')

<div class="row">
    <div class="col-12 text-end pe-4 py-3">
        <button onclick="puntaje(false)" class="btn btn-success">Salir</button>
    </div>
    <div id="tabla-preguntas" class="col-8 m-auto">
        <h2 id="nombre"></h2>
        <h3 id="categoria"></h3>
        <h6 id="dificultad"></h6>
        <p id="pregunta"></p>
      <div class="list-group" id="list-tab" role="tablist"></div>
    </div>
  </div>
</div>


@endsection

@section('myscript')
    <script src="{{asset('assets/js/main.js')}}"></script>
@endsection

{{-- <div id="tabla-preguntas"class="col-8">
    <h3 id="dificultad">Dificultad:{{$dificultad}}</h3>
    <p id="pregunta">{{$pregunta}}</p>
  <div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">{{$respuestas[0]->respuesta}}</a>
    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">{{$respuestas[1]->respuesta}}</a>
    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">{{$respuestas[2]->respuesta}}</a>
    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">{{$respuestas[3]->respuesta}}</a>
  </div>
</div> --}}
