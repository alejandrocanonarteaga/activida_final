<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('credits');
            $table->string('teacher_name');
            $table->unsignedBigInteger('prerequisite_id')->nullable();
            $table->integer('autonomous_work_hours');
            $table->integer('directed_work_hours');
            $table->integer('semester');
            $table->timestamps();
        
            $table->foreign('prerequisite_id')->references('id')->on('subjects');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
