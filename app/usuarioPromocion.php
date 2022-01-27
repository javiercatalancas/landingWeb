<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarioPromocion extends Model
{
    protected $table = "usuariopromocion";
    protected $fillable = [
        'name', 'phone', 'vehicleclass', 'call', 'lastname', 'email', 'vehiclemodel'
    ];

}
