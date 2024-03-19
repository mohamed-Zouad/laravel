<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestControllers extends Controller
{
    public function welcome(){
        return view("welcome");
    }

    // public function about($name , $id){
    //     return view("folderr.about" , ["name"=> $name ,"id"=> $id]);
    // }

    public function about(){
        return view("folderr.about")
                    ->with("name","zouad")
                    ->with("prenom","maohamed");
    }

    public function contact(){
        return view("contact");
    }

    // Méthode d'action pour afficher la table de multiplication
    public function tableMultiple($number = 10)
    {
        $table = [];
        for ($i = 1; $i <= 10; $i++) {
            $table[] = "$number x $i = " . ($number * $i);
        }
        return view('table', ['table' => $table]);
    }

    // Méthode d'action pour convertir Celsius en Fahrenheit
    public function celsiusToFahrenheit($min, $max)
    {
        $results = [];
        for ($celsius = $min; $celsius <= $max; $celsius++) {
            $fahrenheit = $celsius * 9/5 + 32;
            $results[] = "$celsius °C = $fahrenheit °F";
        }
        return view('conversion', ['results' => $results]);
    }

    public function create(){
        return view('create');
    }
    public function show(Request $request){
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $ville = $request->input('ville');
        $password = $request->input('password');

        // return view('show' , ['nom'=>$nom , 'prenom'=>$prenom,'ville'=>$ville,'password'=>$password]);

        return view('show')->with([
            'nom' => $nom,
            'prenom' => $prenom,
            'ville' => $ville,
            'password' => $password
        ]);
    }
}
