<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\auto;

class autoController extends Controller
{
    //
    function Home() {
        return view('home');
    }

    function New() {
        return view('new');
    }

    public function SaveCar(Request $request) {
        $auto = new auto;
        $auto->marca = $request->input('marca');
        $auto->modelo = $request->input('modelo');
        $auto->anyo = $request->input('anyo');
        $auto->patente = $request->input('patente');
        $auto->color = $request->input('color');

        $auto->save();
        return view('home');
    }
    
    public function showCars() {
        $autos=auto::all();
        return view('home',compact('autos'));
    }

    // public function deleteCar(Request $request) {
    //     return "elimiando";
    // }
}
