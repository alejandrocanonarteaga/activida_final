<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('asignaturas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->integer('creditos');
        $table->string('docente');
        $table->string('prerrequisito');
        $table->integer('horas_autonomas');
        $table->integer('horas_dirigidas');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaturas');
    }
};
