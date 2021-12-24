<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class puntajeController extends Controller
{
    public function puntaje(Request $request){
        $consulta=User::where('nombre',$request->nombre)->first();
        if($consulta){
            $consulta->update([
                'puntuacion'=>$request['puntuacion']
            ]);
            return response()->json($consulta);
        }
    }

    public function puntuaciones(){
        return response()->json(
            User::where('puntuacion','>',0)
            ->select('nombre','puntuacion')
            ->take(5)
            ->get()
        );
    }
}
