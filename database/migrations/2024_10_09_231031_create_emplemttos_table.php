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
        Schema::create('emplemttos', function (Blueprint $table) {
            $table->id();

            $table->string('nombreemplemtto');
            $table->string('apellioemplemtto');
            $table->string('fotoemplemtto');     
            $table->bigInteger('identificacionemplemtto');
            $table->bigInteger('numerocelemplemtto');
            $table->string('emailemplemtto');
            $table->string('direccionemplemtto');
            $table->string('profesionemplemtto');
            $table->string('cargoemplemtto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplemttos');
    }
};
