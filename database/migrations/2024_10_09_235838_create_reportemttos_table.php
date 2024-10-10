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
        Schema::create('reportemttos', function (Blueprint $table) {
            $table->id();

            $table -> string('consereportemtto');

            $table -> date('fechaatencion');
            $table -> text('actividad');
            $table -> string('cantidad');
            $table -> string('material');
            $table -> integer('valortotal');
            $table -> text('observaciones');
            $table -> string('fotofirmaentrega');
            $table -> string('fotofirmarecibe');


            $table->unsignedBigInteger('reporteservicio_id')->nullable();
            $table->foreign('reporteservicio_id')->references('id')->on('reporteservicios')->onDelete('cascade');

            $table->unsignedBigInteger('empleips_id')->nullable();
            $table->foreign('empleips_id')->references('id')->on('empleips')->onDelete('cascade');

            $table->unsignedBigInteger('emplemtto_id')->nullable();
            $table->foreign('emplemtto_id')->references('id')->on('emplemttos')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportemttos');
    }
};
