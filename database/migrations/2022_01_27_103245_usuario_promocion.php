<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioPromocion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioPromocion', function(Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('phone');
            $table->string('vehicleclass');
            $table->string('call');
            $table->string('lastname');
            $table->string('email');
            $table->string('vehiclemodel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarioPromocion');
    }
}
