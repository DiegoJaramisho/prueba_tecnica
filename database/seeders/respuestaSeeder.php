<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Seeder;

class respuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $respuestas=[
            //CATEGORIA=>CINE
            //PREGUNTA: Nombre del actor de la pelicula Rambo
            [
                'respuesta'=>'sylvester stallone',
                'correcta'=>true,
                'preguntas_id'=>1,
            ],
            [
                'respuesta'=>'Nicolas Cage',
                'correcta'=>false,
                'preguntas_id'=>1,
            ],
            [
                'respuesta'=>'Ryan Goshlyng',
                'correcta'=>false,
                'preguntas_id'=>1,
            ],
            [
                'respuesta'=>'Marlon Brando',
                'correcta'=>false,
                'preguntas_id'=>1,
            ],
            //CATEGORIA=>CINE
            //PREGUNTA: Nombre de la pelicula donde un ogro verde rescata a una hermosa princesa
            [
                'respuesta'=>'Pinocho robot',
                'correcta'=>false,
                'preguntas_id'=>2,
            ],
            [
                'respuesta'=>'Bolt',
                'correcta'=>false,
                'preguntas_id'=>2,
            ],
            [
                'respuesta'=>'Shrek',
                'correcta'=>true,
                'preguntas_id'=>2,
            ],
            [
                'respuesta'=>'Rango',
                'correcta'=>false,
                'preguntas_id'=>2,
            ],
            //CATEGORIA=>CINE
            //PREGUNTA: Peliula en donde se hunde un barco gigante al chocar con un iceberg
            [
                'respuesta'=>'El padrino',
                'correcta'=>false,
                'preguntas_id'=>3,
            ],
            [
                'respuesta'=>'Duro de matar',
                'correcta'=>false,
                'preguntas_id'=>3,
            ],
            [
                'respuesta'=>'lagrimas del sol',
                'correcta'=>false,
                'preguntas_id'=>3,
            ],
            [
                'respuesta'=>'Titanic',
                'correcta'=>true,
                'preguntas_id'=>3,
            ],
            //CATEGORIA=>CINE
            //PREGUNTA: ??De que editorial de comics salio el super heroe Spiderman?
            [
                'respuesta'=>'Marvel',
                'correcta'=>true,
                'preguntas_id'=>4,
            ],
            [
                'respuesta'=>'DC comics',
                'correcta'=>false,
                'preguntas_id'=>4,
            ],
            [
                'respuesta'=>'Condorito Historietas',
                'correcta'=>false,
                'preguntas_id'=>4,
            ],
            [
                'respuesta'=>'El clarin',
                'correcta'=>false,
                'preguntas_id'=>4,
            ],
            //CATEGORIA=>CINE
            //PREGUNTA: Nombre de la pelicula animada que realizo Disney inspirada en Colombia
            [
                'respuesta'=>'Rio',
                'correcta'=>false,
                'preguntas_id'=>5,
            ],
            [
                'respuesta'=>'Coco',
                'correcta'=>false,
                'preguntas_id'=>5,
            ],
            [
                'respuesta'=>'Soul',
                'correcta'=>false,
                'preguntas_id'=>5,
            ],
            [
                'respuesta'=>'Encanto',
                'correcta'=>true,
                'preguntas_id'=>5,
            ],
            //CATEGORIA=>DEPORTES
            //PREGUNTA: Jugador portugues de elite conocido por celebrar sus goles gritando SIUUUUuuuu!!!!'
            [
                'respuesta'=>'Cristiano Ronaldo',
                'correcta'=>true,
                'preguntas_id'=>6,
            ],
            [
                'respuesta'=>'Metzu Ozil',
                'correcta'=>false,
                'preguntas_id'=>6,
            ],
            [
                'respuesta'=>'Leonel Messi',
                'correcta'=>false,
                'preguntas_id'=>6,
            ],
            [
                'respuesta'=>'Tino Asprilla',
                'correcta'=>false,
                'preguntas_id'=>6,
            ],
            //CATEGORIA=>DEPORTES
            //PREGUNTA: Maximo goleador historico de la seleccion Colombia de futbol'
            [
                'respuesta'=>'Pibe Valderrama',
                'correcta'=>false,
                'preguntas_id'=>7,
            ],
            [
                'respuesta'=>'James Rodriguez',
                'correcta'=>false,
                'preguntas_id'=>7,
            ],
            [
                'respuesta'=>'Hugo Rodallega',
                'correcta'=>false,
                'preguntas_id'=>7,
            ],
            [
                'respuesta'=>'Radamel Falcao',
                'correcta'=>true,
                'preguntas_id'=>7,
            ],
            //CATEGORIA=>DEPORTES
            //PREGUNTA: Se le conoce como el hombre mas veloz del mundo'
            [
                'respuesta'=>'Flash',
                'correcta'=>false,
                'preguntas_id'=>8,
            ],
            [
                'respuesta'=>'Quick Silver',
                'correcta'=>false,
                'preguntas_id'=>8,
            ],
            [
                'respuesta'=>'Usaint Bolt',
                'correcta'=>true,
                'preguntas_id'=>8,
            ],
            [
                'respuesta'=>'Chicharito Hernandez',
                'correcta'=>false,
                'preguntas_id'=>8,
            ],
            //CATEGORIA=>DEPORTES
            //PREGUNTA: considerado el mejor jugador profesional de League of legends de la historia
            [
                'respuesta'=>'Cotopaco',
                'correcta'=>false,
                'preguntas_id'=>9,
            ],
            [
                'respuesta'=>'Kerios',
                'correcta'=>false,
                'preguntas_id'=>9,
            ],
            [
                'respuesta'=>'Faker',
                'correcta'=>true,
                'preguntas_id'=>9,
            ],
            [
                'respuesta'=>'Dopa',
                'correcta'=>false,
                'preguntas_id'=>9,
            ],
            //CATEGORIA=>DEPORTES
            //PREGUNTA: jugador conocido por su historica "mano de Dios"
            [
                'respuesta'=>'Leonel Messi',
                'correcta'=>false,
                'preguntas_id'=>10,
            ],
            [
                'respuesta'=>'Cristiano Ronaldo',
                'correcta'=>false,
                'preguntas_id'=>10,
            ],
            [
                'respuesta'=>'Neymar',
                'correcta'=>false,
                'preguntas_id'=>10,
            ],
            [
                'respuesta'=>'Diego Maradona',
                'correcta'=>true,
                'preguntas_id'=>10,
            ],
            //CATEGORIA=>PROGRAMACION
            //PREGUNTA: Laravel es un framework de:
            [
                'respuesta'=>'JAVA',
                'correcta'=>false,
                'preguntas_id'=>11,
            ],
            [
                'respuesta'=>'JAVA SCRIPT',
                'correcta'=>false,
                'preguntas_id'=>11,
            ],
            [
                'respuesta'=>'PHP',
                'correcta'=>true,
                'preguntas_id'=>11,
            ],
            [
                'respuesta'=>'C',
                'correcta'=>false,
                'preguntas_id'=>11,
            ],
            //CATEGORIA=>PROGRAMACION
            //PREGUNTA: HTML es::
            [
                'respuesta'=>'Lenguaje de Marcas de Hipertexto',
                'correcta'=>true,
                'preguntas_id'=>12,
            ],
            [
                'respuesta'=>'Lenguaje de programacion',
                'correcta'=>false,
                'preguntas_id'=>12,
            ],
            [
                'respuesta'=>'framework de JS',
                'correcta'=>false,
                'preguntas_id'=>12,
            ],
            [
                'respuesta'=>'Lenguaje compilado',
                'correcta'=>false,
                'preguntas_id'=>12,
            ],
            //CATEGORIA=>PROGRAMACION
            //PREGUNTA: la POO se basa en:
            [
                'respuesta'=>'Se basa en el concepto de clases y objetos.',
                'correcta'=>true,
                'preguntas_id'=>13,
            ],
            [
                'respuesta'=>'Codigo spaghetti',
                'correcta'=>false,
                'preguntas_id'=>13,
            ],
            [
                'respuesta'=>'Dise??ar Frontend',
                'correcta'=>false,
                'preguntas_id'=>13,
            ],
            [
                'respuesta'=>'Programar activamente',
                'correcta'=>false,
                'preguntas_id'=>13,
            ],
            //CATEGORIA=>PROGRAMACION
            //PREGUNTA: PostgresSQL es:
            [
                'respuesta'=>'es un sistema de gesti??n de bases de datos relacional orientado a objetos y de c??digo abierto',
                'correcta'=>true,
                'preguntas_id'=>14,
            ],
            [
                'respuesta'=>'un lenguaje de programacion',
                'correcta'=>false,
                'preguntas_id'=>14,
            ],
            [
                'respuesta'=>'un framework de js',
                'correcta'=>false,
                'preguntas_id'=>14,
            ],
            [
                'respuesta'=>'un framework de php',
                'correcta'=>false,
                'preguntas_id'=>14,
            ],
            //CATEGORIA=>PROGRAMACION
            //PREGUNTA: la funcion de un desarrollador backend es:
            [
                'respuesta'=>'desarrollar la interfaz grafica de el proyecto',
                'correcta'=>false,
                'preguntas_id'=>15,
            ],
            [
                'respuesta'=>'programar en js,css y html',
                'correcta'=>false,
                'preguntas_id'=>15,
            ],
            [
                'respuesta'=>'arreglar los equipos de computo averiados',
                'correcta'=>false,
                'preguntas_id'=>15,
            ],
            [
                'respuesta'=>'se encarga de dise??ar la l??gica y las soluciones para que todas las acciones solicitadas en una p??gina web sean ejecutadas de manera correcta',
                'correcta'=>true,
                'preguntas_id'=>15,
            ],
            //CATEGORIA=>GEOGRAFIA
            //PREGUNTA: ??Qu?? es Zelandia?:
            [
                'respuesta'=>'Una ciudad islandesa',
                'correcta'=>false,
                'preguntas_id'=>16,
            ],
            [
                'respuesta'=>'Un parque tem??tico',
                'correcta'=>false,
                'preguntas_id'=>16,
            ],
            [
                'respuesta'=>'Un pa??s del hemisferio norte',
                'correcta'=>false,
                'preguntas_id'=>16,
            ],
            [
                'respuesta'=>'Un continente',
                'correcta'=>true,
                'preguntas_id'=>16,
            ],
            //CATEGORIA=>GEOGRAFIA
            //PREGUNTA: El r??o m??s largo de Europa es...
            [
                'respuesta'=>'El Tajo',
                'correcta'=>false,
                'preguntas_id'=>17,
            ],
            [
                'respuesta'=>'El Volga',
                'correcta'=>true,
                'preguntas_id'=>17,
            ],
            [
                'respuesta'=>'El T??mesis',
                'correcta'=>false,
                'preguntas_id'=>17,
            ],
            [
                'respuesta'=>'El Ebro',
                'correcta'=>true,
                'preguntas_id'=>17,
            ],
            //CATEGORIA=>GEOGRAFIA
            //PREGUNTA: ??D??nde est??n las ruinas de Esparta?
            [
                'respuesta'=>'En Grecia',
                'correcta'=>true,
                'preguntas_id'=>18,
            ],
            [
                'respuesta'=>'En Francia',
                'correcta'=>false,
                'preguntas_id'=>18,
            ],
            [
                'respuesta'=>'En Italia',
                'correcta'=>false,
                'preguntas_id'=>18,
            ],
            [
                'respuesta'=>'En Turqu??a',
                'correcta'=>false,
                'preguntas_id'=>18,
            ],
            //CATEGORIA=>GEOGRAFIA
            //PREGUNTA: ??Qu?? pa??ses ba??a el mar Muerto?
            [
                'respuesta'=>'Egipto, Sud??n y Eritrea',
                'correcta'=>false,
                'preguntas_id'=>19,
            ],
            [
                'respuesta'=>'Rusia, Ir??n y Azerbaiy??n',
                'correcta'=>false,
                'preguntas_id'=>19,
            ],
            [
                'respuesta'=>'Israel, Jordania y Palestina',
                'correcta'=>true,
                'preguntas_id'=>19,
            ],
            [
                'respuesta'=>'Grecia y Turqu??a',
                'correcta'=>false,
                'preguntas_id'=>19,
            ],
            //CATEGORIA=>GEOGRAFIA
            //PREGUNTA: ??C??mo se llama la l??nea imaginaria que pasa por el centro del Polo Norte y del Polo Sur?
            [
                'respuesta'=>'Primer eje',
                'correcta'=>false,
                'preguntas_id'=>20,
            ],
            [
                'respuesta'=>'Eje central',
                'correcta'=>false,
                'preguntas_id'=>20,
            ],
            [
                'respuesta'=>'Meridiano global primario',
                'correcta'=>false,
                'preguntas_id'=>20,
            ],
            [
                'respuesta'=>'Primer meridiano',
                'correcta'=>true,
                'preguntas_id'=>20,
            ],
            //CATEGORIA=>Historia
            //PREGUNTA: ??Qui??n dibujo al famoso Hombre de Vitruvio?
            [
                'respuesta'=>'Miguel Angel',
                'correcta'=>false,
                'preguntas_id'=>21,
            ],
            [
                'respuesta'=>'Leonardo da Vinci',
                'correcta'=>true,
                'preguntas_id'=>21,
            ],
            [
                'respuesta'=>'Rubens',
                'correcta'=>false,
                'preguntas_id'=>21,
            ],
            [
                'respuesta'=>'Scorcese',
                'correcta'=>false,
                'preguntas_id'=>21,
            ],
            //CATEGORIA=>Historia
            //PREGUNTA: ??Qu?? famoso fil??sofo fue maestro de Alejandro Magno durante cinco a??os?
            [
                'respuesta'=>'S??crates',
                'correcta'=>false,
                'preguntas_id'=>22,
            ],
            [
                'respuesta'=>'Arist??teles',
                'correcta'=>true,
                'preguntas_id'=>22,
            ],
            [
                'respuesta'=>'Plat??n',
                'correcta'=>false,
                'preguntas_id'=>22,
            ],
            [
                'respuesta'=>'Descartes',
                'correcta'=>false,
                'preguntas_id'=>22,
            ],
            //CATEGORIA=>Historia
            //PREGUNTA: ??Quienes eran los templarios?
            [
                'respuesta'=>'Eran una sociedad que cre??a en Dios pero no en la Virgen Mar??a',
                'correcta'=>false,
                'preguntas_id'=>23,
            ],
            [
                'respuesta'=>'Era una orden religiosa que existi?? durante la Roma de Diocleciano',
                'correcta'=>false,
                'preguntas_id'=>23,
            ],
            [
                'respuesta'=>'Era una orden religiosa y militar',
                'correcta'=>true,
                'preguntas_id'=>23,
            ],
            [
                'respuesta'=>'Una organizacion politica de la edad media',
                'correcta'=>false,
                'preguntas_id'=>23,
            ],
            //CATEGORIA=>Historia
            //PREGUNTA: ??Qu?? inici?? la Segunda Guerra Mundial?
            [
                'respuesta'=>'Alemania invadi?? Polonia.',
                'correcta'=>true,
                'preguntas_id'=>24,
            ],
            [
                'respuesta'=>'El asesinato del archiduque Francisco Fernando.',
                'correcta'=>false,
                'preguntas_id'=>24,
            ],
            [
                'respuesta'=>'Hitler invadi?? Austria.',
                'correcta'=>false,
                'preguntas_id'=>24,
            ],
            [
                'respuesta'=>'Rusia invadio Alemania',
                'correcta'=>false,
                'preguntas_id'=>24,
            ],
            //CATEGORIA=>Historia
            //PREGUNTA: ??De qu?? nacionalidad era Adolf Hitler?
            [
                'respuesta'=>'Naci?? en Alemania.',
                'correcta'=>false,
                'preguntas_id'=>25,
            ],
            [
                'respuesta'=>'Naci?? en Polonia',
                'correcta'=>false,
                'preguntas_id'=>25,
            ],
            [
                'respuesta'=>'Naci?? en Austria',
                'correcta'=>true,
                'preguntas_id'=>25,
            ],
            [
                'respuesta'=>'Naci?? en Suiza',
                'correcta'=>false,
                'preguntas_id'=>25,
            ],


        ];

        foreach($respuestas as $value){

            $respuesta=new Respuesta();
            $respuesta->respuesta=$value['respuesta'];
            $respuesta->correcta=$value['correcta'];
            $respuesta->preguntas_id=$value['preguntas_id'];
            $respuesta->save();
        }
    }
}
