<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculControllers extends Controller
{
    public function calculate(){
        return view('calcul');
    }
    public function showcalcul(Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $result = $num1 + $num2;
        return view('resultcalcul' , ['result'=>$result]);
}
public function calculimc(){
    return view('calculeimc');
}

public function resultcalculimc(Request $request){
    $poids = $request->input('poids');
    $taille = $request->input('taille');

    $imc = $poids / ($taille * $taille);
    return view('resultcalculimc', ['imc'=>$imc]);
}
}
