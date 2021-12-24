<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class JugandoController extends Controller
{

    public function index(){
        return view('juego.juego');
    }

    public function pregunta($id){

        try {

            $categorias = Categoria::where('id',$id)->with([
                'preguntas'=>  function ($query){
                    $query->with([
                        'respuestas'=> function ($_query){
                            $_query->select('id','preguntas_id','respuesta');
                        }
                    ])
                    ->select('id','nombre','categorias_id');
                }
            ])
            ->select('id','dificultad','nombre')
            ->first();
            if($categorias){
                $preguntas=$categorias->preguntas;
                $posicion = rand(0,count($preguntas)-1);
                $preguntaAleatoria = $preguntas[$posicion];
                $respuestas=$preguntaAleatoria->respuestas;
                return response()->json([
                    'pregunta'=>[
                        'nombre'=>$preguntaAleatoria['nombre'],
                        'id'=>$preguntaAleatoria['id'],
                    ],
                    'categoria'=> [
                        'nombre'=>$categorias['nombre'],
                        'id'=>$categorias['id'],
                        'dificultad'=>$categorias['dificultad'],
                    ],
                    'respuestas'=> $respuestas
                ]);
            }
            return response()->json([
                'status'=>'Error'
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'status'=>'Error',
                'type'=>$e->getMessage()
            ]);
        }

    }

}
