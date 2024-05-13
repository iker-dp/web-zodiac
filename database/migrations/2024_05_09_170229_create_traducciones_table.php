<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraduccionesTable extends Migration
{
    public function up()
    {
        Schema::create('traducciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_signo');
            $table->string('idioma');
            $table->string('traduccion');
            $table->timestamps();

            $table->foreign('id_signo')->references('id')->on('signos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('traducciones');
    }
}
