<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;

class preguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preguntas=[
            //CATEGORIA=>CINE
            [
                'pregunta'=>'Nombre del actor de la pelicula Rambo',
                'categoria'=>1
            ],
            [
                'pregunta'=>'Nombre de la pelicula donde un ogro verde rescata a una hermosa princesa',
                'categoria'=>1
            ],
            [
                'pregunta'=>'Peliula en donde se hunde un barco gigante al chocar con un iceberg',
                'categoria'=>1
            ],
            [
                'pregunta'=>'¿De que editorial de comics salio el super heroe Spiderman?',
                'categoria'=>1
            ],
            [
                'pregunta'=>'Nombre de la pelicula animada que realizo Disney inspirada en Colombia',
                'categoria'=>1
            ],
            //CATEGORIA=>DEPORTES
            [
                'pregunta'=>'Jugador portugues de elite conocido por celebrar sus goles gritando SIUUUUuuuu!!!!',
                'categoria'=>2
            ],
            [
                'pregunta'=>'Maximo goleador historico de la seleccion Colombia de futbol',
                'categoria'=>2
            ],
            [
                'pregunta'=>'Se le conoce como el hombre mas veloz del mundo',
                'categoria'=>2
            ],
            [
                'pregunta'=>'considerado el mejor jugador profesional de League of legends de la historia',
                'categoria'=>2
            ],
            [
                'pregunta'=>'jugador conocido por su historica "mano de Dios"',
                'categoria'=>2
            ],
            //CATEGORIA=>PROGRAMACION
            [
                'pregunta'=>'Laravel es un framework de:',
                'categoria'=>3
            ],
            [
                'pregunta'=>'HTML es:',
                'categoria'=>3
            ],
            [
                'pregunta'=>'la POO se basa en:',
                'categoria'=>3
            ],
            [
                'pregunta'=>'PostgresSQL es:',
                'categoria'=>3
            ],
            [
                'pregunta'=>'la funcion de un desarrollador backend es:',
                'categoria'=>3
            ],
            //CATEGORIA=>GEOGRAFIA
            [
                'pregunta'=>'¿Qué es Zelandia?:',
                'categoria'=>4
            ],
            [
                'pregunta'=>'El río más largo de Europa es...:',
                'categoria'=>4
            ],
            [
                'pregunta'=>'¿Dónde están las ruinas de Esparta?',
                'categoria'=>4
            ],
            [
                'pregunta'=>'¿Qué países baña el mar Muerto?',
                'categoria'=>4
            ],
            [
                'pregunta'=>'¿Cómo se llama la línea imaginaria que pasa por el centro del Polo Norte y del Polo Sur?',
                'categoria'=>4
            ],
            //CATEGORIA=>Historia
            [
                'pregunta'=>'¿Quién dibujo al famoso Hombre de Vitruvio?',
                'categoria'=>5
            ],
            [
                'pregunta'=>'¿Qué famoso filósofo fue maestro de Alejandro Magno durante cinco años?',
                'categoria'=>5
            ],
            [
                'pregunta'=>'¿Quienes eran los templarios?',
                'categoria'=>5
            ],
            [
                'pregunta'=>'¿Qué inició la Segunda Guerra Mundial?',
                'categoria'=>5
            ],
            [
                'pregunta'=>'¿De qué nacionalidad era Adolf Hitler?',
                'categoria'=>5
            ],
            ];

            foreach($preguntas as $value){
                $pregunta=new Pregunta();
                $pregunta->nombre=$value['pregunta'];
                $pregunta->categorias_id=$value['categoria'];
                $pregunta->save();
            }
    }
}
