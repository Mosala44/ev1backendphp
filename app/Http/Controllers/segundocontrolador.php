<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegundoControlador extends Controller
{
    public function batman($nombre) {
        $data = [
            'Bruce' => [
            "nombre" => "Bruce Wayne",
            "cargo" => "CEO",
            "email" => "brw@gmail.com",
            "ciudad" => "Gotham",
            "biografia" => "no es batman xd",
            "img" => asset("images/bruce.jpg"),
            ],
            "Clark" => [
            'nombre' => 'Clark Kent',
            'cargo' => 'President',
            "email" => 'akska@gmail.com',
            'ciudad' => 'Metropolis',
            'biografia' => 'Tengo que ver Superman 2',
            'img' => asset('images/clark.jpg'),
            ],
            'WonderWoman' => [
            'nombre' => 'Diana Prince',
            'cargo' => 'mi mujer',
            'email' => 'jsdjs@gmail.com',
            'ciudad' => 'nose ta rika',
            'biografia' => 'ta rika',
            'img' => asset('images/diana.jpg'),
            ]
        
        ];
        $logo = asset('images/logo.png');
        return view('persona', [
    'personaje' => $data[$nombre],
    'logo' => $logo
]);
    }
}



// $diana = ["nombre" => "La mujer maravilla",
 //   "cargo" => "CEO",
 //   "email" => "ww@gmail.com",
 //   "ciudad" => "nose xd",
 //   "biografia" => "no se xd",
 //   "img" => asset("images/diana.jpg")];
//
 //   $clark = ["nombre" => "Clark Ken",
 //   "cargo" => "Presidente",
 //   "email" => "CRK@gmail.com",
 //   "ciudad" => "antofagasta city",
 //   "biografia" => "nose",
 //   "img" => asset("images/clark.jpg")];
