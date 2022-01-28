<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class claseVehiculoController extends Controller
{
    public function clasevehiculo(){
        $id = $_POST['id'];
        $modelo = DB::table('modelo')->where('id_modelo',$id)->pluck('nombre');
        return view('modelo', ['modelo' => $modelo]);
    }
}
