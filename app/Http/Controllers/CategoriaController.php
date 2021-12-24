<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function __construct()
    {

    }
    public function index(){
        $categorias = Categoria::all();
        // $categorias
        return view('juego.juego',compact('categorias'));
    }

    public function niveles(){
        $categorias = Categoria::all();
        // $categorias
        return $categorias;
    }
}
