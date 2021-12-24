<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\JugandoController;
use App\Http\Controllers\puntajeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidacionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/game_over', function () {
    return view('game_over.game_over');
});
Route::get('/puntuacion', function () {
    return view('puntaje.puntaje');
});



// Route::group([],function(){


//     Route::get('/jugar', function () {
//         return view('juego.juego',['name'=>'diego']);
//     });
// });

// Route::group([],function ($router) {
Route::resource('/iniciar',UserController::class);
Route::get('/jugar',[JugandoController::class,'index']);
Route::post('/jugar/{id}',[JugandoController::class,'pregunta']);
Route::post('/validar',[ValidacionController::class,'validar']);
Route::post('/puntaje',[puntajeController::class,'puntaje']);
Route::post('/puntuaciones',[puntajeController::class,'puntuaciones']);
