<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tercercontrolador extends Controller
{
    
    public function proyectos(){
            $proyectos = [
                ["Codigo"=> "CD001", "nombre"=> "Proyecto1", "descripcion"=> "breve descripcion"],
                ["Codigo"=> "CD002", "nombre"=> "Proyecto2", "descripcion"=> "breve descripcion"],
                ["Codigo"=> "CD003", "nombre"=> "Proyecto3", "descripcion"=> "breve descripcion"],
                ["Codigo"=> "CD004", "nombre"=> "Proyecto4", "descripcion"=> "breve descripcion"],
                ["Codigo"=> "CD005", "nombre"=> "Proyecto5", "descripcion"=> "breve descripcion"],
                ["Codigo"=> "CD006", "nombre"=> "Proyecto6", "descripcion"=> "breve descripcion"]
                
            ];
        $logo = asset('images/logo.png');
        return view('/proyectos', compact('proyectos', 'logo'));
    }
};
