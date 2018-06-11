<?php

namespace App\Http\Controllers;

use App\auto;
use Illuminate\Http\Request;

class autosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos=auto::all();
        return view('home',compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auto= new auto;
        return view('new',compact('auto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auto = new auto;
        $auto->marca = $request->input('marca');
        $auto->modelo = $request->input('modelo');
        $auto->anyo = $request->input('anyo');
        $auto->patente = $request->input('patente');
        $auto->color = $request->input('color');
        $auto->save();

        // $autos=auto::all();
        // return view('home',compact('autos'));
        return redirect('autos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(auto $auto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(auto $auto)
    {
        //$auto=auto::find($id);
        return view('new',compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, auto $auto)
    {
        // $auto=customers::find($id); 
        $auto->marca = $request->input('marca');
        $auto->modelo = $request->input('modelo');
        $auto->anyo = $request->input('anyo');
        $auto->patente = $request->input('patente');
        $auto->color = $request->input('color');
        $auto->save();

        // $autos=auto::all();
        // return view('home',compact('autos'));
        return redirect('autos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(auto $auto)
    {
        //$auto=auto::find($id);
        $auto->delete();

        
        return redirect('autos');
    }

    public function getJson()
    {
        $autos=auto::all();
        return response()->json($autos);
    }

    public function apiId($id)
    {
        $auto=auto::find($id);
        return response()->json($auto);
    }
}
