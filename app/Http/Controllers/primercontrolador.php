<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primercontrolador extends Controller
{
    public function  mostrarpersonajes() 
    {
        
        $data = [
            'Bruce' => [
            "nombre" => "BRUCE WAYNE",
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
        return view('principal' , compact('data', 'logo'));
        }
    }

    //

