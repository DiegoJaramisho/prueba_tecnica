<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $consulta=User::where('nombre',$request->nombre)->first();
        if(!$consulta){
            User::create([
                'nombre'=>$request['nombre'],
                'puntuacion'=>$request['puntuacion']
            ]);
            return response()->json($request->nombre);
        }
        return response()->json(
            $request->nombre
        );

    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
