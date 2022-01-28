<?php

namespace App\Http\Controllers;

use App\usuarioPromocion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBlogPost;

class promController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$vehiculo = DB::table('vehiculo')->pluck('nombre', 'id');
        $vehiculo = DB::table('vehiculo')->get();

        //->pluck('id');
        //$id = DB::table('vehiculo')->pluck('id');
        //$turismo_comercial = DB::table('turismo_comercial')->pluck('nombre');
       return view('promocion', [
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
    public function store(StoreBlogPost $request)
    {
        //Validamos
        $validatedData = $request->validated;
        // Insertar en la BBDD
        $usuarioPromocion = new usuarioPromocion();
        $usuarioPromocion-> name =$request->name;
        $usuarioPromocion-> phone =$request->phone;
        $usuarioPromocion-> vehicleclass =$request->vehicleclass;
        $usuarioPromocion-> call =$request->call;
        $usuarioPromocion-> lastname =$request->lastname;
        $usuarioPromocion-> email =$request->email;
        $usuarioPromocion-> vehiclemodel =$request->vehiclemodel;
        $usuarioPromocion->save();

        // Si está todo OK, debe redireccionar a la pantalla de gracias
    

        return $request->all();
        
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
