<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias=[
            [
                'nombre'=>'cine',
                'dificultad'=>'aprendiz'
            ],
            [
                'nombre'=>'deportes',
                'dificultad'=>'sabiondo'
            ],
            [
                'nombre'=>'programacion',
                'dificultad'=>'estudioso'
            ],
            [
                'nombre'=>'geografia',
                'dificultad'=>'sabio'
            ],
            [
                'nombre'=>'historia',
                'dificultad'=>'erudito'
            ]

            ,

        ];
        foreach($categorias as $value){
            $categoria = Categoria::create([
                'nombre'=>$value['nombre'],
                'dificultad'=>$value['dificultad']
            ]);
        }

    }
}
