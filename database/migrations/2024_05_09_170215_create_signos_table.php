<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignosTable extends Migration
{
    public function up()
    {
        Schema::create('signos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('prediccion');
            $table->dateTime('datetime');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('signos');
    }
}
