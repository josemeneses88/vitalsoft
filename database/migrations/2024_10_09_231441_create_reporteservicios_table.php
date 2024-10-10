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
        Schema::create('reporteservicios', function (Blueprint $table) {
            $table->id();

            $table -> string('consereporteser');
            $table -> date('fechareporte');
            $table -> string('dirigido');
            $table -> date('fechadaño');
            $table -> text('descripcion');
            $table -> string('fotoequipodañado');
            $table -> string('fotofirmareporta');
            $table -> string('fotofirmarecibe');

            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');

            $table->unsignedBigInteger('ubifisica_id')->nullable();
            $table->foreign('ubifisica_id')->references('id')->on('ubifisicas')->onDelete('cascade');

            $table->unsignedBigInteger('propiedad_id')->nullable();
            $table->foreign('propiedad_id')->references('id')->on('propiedads')->onDelete('cascade');

            $table->unsignedBigInteger('tipomtto_id')->nullable();
            $table->foreign('tipomtto_id')->references('id')->on('tipomttos')->onDelete('cascade');

            $table->unsignedBigInteger('empleips_id')->nullable();
            $table->foreign('empleips_id')->references('id')->on('empleips')->onDelete('cascade');

            $table->unsignedBigInteger('emplemtto_id')->nullable();
            $table->foreign('emplemtto_id')->references('id')->on('emplemttos')->onDelete('cascade');

            $table->unsignedBigInteger('hojadevida_id')->nullable();
            $table->foreign('hojadevida_id')->references('id')->on('hojadevidas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reporteservicios');
    }
};
