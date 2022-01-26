<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class promController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
        $turismo_comercial = DB::table('turismo_comercial')->pluck('nombre');
        $vehiculo = DB::table('vehiculo')->pluck('nombre');
       
       return view('promocion', [
           'turismo_comercial' => $turismo_comercial, 
           'vehiculo' => $vehiculo
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $rules = [
           'name' => 'required|string|min:3|max:30',
           'lastname' =>'required|string|max:30',
           'phone' =>'numeric|regex:/^[\d]{0,}(.[\d]{2})?$/|nullable',
       ];

       $messages = [
        'required'=>'El campo :attribute es obligatorio.',
        'name.string'=>'Debes escribir texto',
        'phone.numeric'=>'Debes introducir un número de teléfono correcto',
        'phone.regex'=>'Debes introducir un número de teléfono correcto',
        'max'=>'Número máximo de caracteres',
        'min'=>'Número mínimo de caracteres'
        
    ];

    $validatedData = $request->validate($rules, $messages);

    // Si está todo OK, debe redireccionar a la pantalla de gracias
    // Si está todo ok, debe insertar en la bbdd el contenido del formulario
        return "Funcionando";
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
