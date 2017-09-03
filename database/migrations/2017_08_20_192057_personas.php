<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //------------------------------//
        // Esquema de la tabla Personas //
        //------------------------------//
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('dni')->unique();
            $table->integer('edad');
            $table->string('trabajo');
            $table->text('descripcionProblema');
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
        //Borra la tabla personas
        Schema::dropIfExists('personas');
    }
}
