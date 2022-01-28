<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirectController extends Controller
{
    
    public function redirect(){
        return redirect('promocion')->with('error', 'Primero debe rellenar el formulario');
    }
}
