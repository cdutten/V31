<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class casas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //---------------------------//
        // Esquema de la tabla Casas //
        //---------------------------//
        Schema::create('casas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion');
            $table->text('descripcion');
            $table->string('lat');
            $table->string('long');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Borra la tabla casas
        Schema::dropIfExists('casas');
    }
}
