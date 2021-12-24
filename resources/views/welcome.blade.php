@extends('layouts.app')
@section('section','inicio')
@section('content')
<div id="container-card" class="d-none">
    <div class="card">
        <h2 class="text-center pt-4">QUIZ</h2>
        <div class="card-body">
          <div class="col-12">
            <label for="nombre" class="form-label">Nickname:</label>
            <div class="input-group flex-nowrap">
              <!-- <span class="input-group-text" id="addon-wrapping">@</span> -->
              <input type="text" class="form-control" id="nombre" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
          </div>
          <div class="col-12 pt-4 text-center">
            <button type="button" id="button-jugar" onclick="iniciar()" class="mx-1 btn btn-info">Jugar</button>
            <a href="/puntuacion" class="mx-1 btn btn-warning">VerPuntuacion</a>
          </div>
        </div>
      </div>
  </div>

  @endsection

@section('myscript')
    <script src="{{asset('assets/js/home.js')}}"></script>
@endsection


