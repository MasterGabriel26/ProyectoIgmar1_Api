<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_modelo', 60 );
            $table->string('descripcion', 300 );
            $table->string('year', 20 );
            $table->timestamps();
        });
    } 

    public function down()
    {
        Schema::dropIfExists('modelos');
    }
};
