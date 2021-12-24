<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use Illuminate\Http\Request;

class ValidacionController extends Controller
{
    public function validar(Request $request){
        $respuesta=Respuesta::where('id',$request->id)->first();
        if($respuesta && $respuesta->correcta){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
