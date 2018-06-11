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
        return view('new');
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

        $autos=auto::all();
        return view('home',compact('autos'));
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
        $auto=autos::find($id);
        return view('new',compact('cliente'));
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
        $auto=customers::find($id); 
        $auto->marca = $request->input('marca');
        $auto->modelo = $request->input('modelo');
        $auto->anyo = $request->input('anyo');
        $auto->patente = $request->input('patente');
        $auto->color = $request->input('color');
        $auto->save();

        $autos=auto::all();
        return view('home',compact('autos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(auto $auto)
    {
        $auto=customers::find($id);
        $auto->delete();

        $autos=auto::all();
        return view('home',compact('autos'));
    }
}
