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
        Schema::create('hojadevidas', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('serie');
            $table->string('perioCali');
            $table->date('fechaCali');
            $table->string('actFijo');
            $table->string('regInvima');
            $table->string('Estado');
            $table->string('foto');
            $table->date('fechaAdquisicion');
            $table->date('fechaInstalacion');
            $table->string('garantia');
            $table->string('factura');
            $table->string('vidaUtil');
            $table->integer('costo');
            $table->string('propiedad');
            $table->integer('volMax');
            $table->integer('volMin');
            $table->integer('presion');
            $table->integer('peso');
            $table->string('frecuencia');
            $table->integer('corrienteMax');
            $table->integer('corrienteMin');
            $table->integer('potencia');
            $table->integer('dimLargo');
            $table->integer('dimAncho');
            $table->integer('dimAlto');
            $table->integer('capacidad');
            $table->integer('temperatura');
            $table->integer('velocidad');
            $table->integer('humedad');
            $table->string('recomendaciones');
            $table->string('anexo_manual');
            $table->string('anexo_factura');
            $table->string('anexo_registroinvima');
            $table->string('anexo_certficadocalibracion');

// Foraneas
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');

            $table->unsignedBigInteger('nombreequipo_id')->nullable();	
            $table->foreign('nombreequipo_id')->references('id')->on('nombreequipos')->onDelete('cascade');

            $table->unsignedBigInteger('tecpredo_id')->nullable();
            $table->foreign('tecpredo_id')->references('id')->on('tecpredos')->onDelete('cascade');

            $table->unsignedBigInteger('estadoequipo_id')->nullable();
            $table->foreign('estadoequipo_id')->references('id')->on('estadoequipos')->onDelete('cascade');

            $table->unsignedBigInteger('nombremarca_id')->nullable();
            $table->foreign('nombremarca_id')->references('id')->on('nombremarcas')->onDelete('cascade');

            $table->unsignedBigInteger('codiecri_id')->nullable();
            $table->foreign('codiecri_id')->references('id')->on('codiecris')->onDelete('cascade');

            $table->unsignedBigInteger('ubifisica_id')->nullable();
            $table->foreign('ubifisica_id')->references('id')->on('ubifisicas')->onDelete('cascade');

            $table->unsignedBigInteger('cla_riesgo_id')->nullable();
            $table->foreign('cla_riesgo_id')->references('id')->on('cla_riesgos')->onDelete('cascade');

            $table->unsignedBigInteger('cla_biomedica_id')->nullable();
            $table->foreign('cla_biomedica_id')->references('id')->on('cla_biomedicas')->onDelete('cascade');

            $table->unsignedBigInteger('cla_uso_id')->nullable();
            $table->foreign('cla_uso_id')->references('id')->on('cla_usos')->onDelete('cascade');

            $table->unsignedBigInteger('forma_adqui_id')->nullable();
            $table->foreign('forma_adqui_id')->references('id')->on('forma_adquis')->onDelete('cascade');

            $table->unsignedBigInteger('mag_fuen_alimen_id')->nullable();
            $table->foreign('mag_fuen_alimen_id')->references('id')->on('mag_fuen_alimens')->onDelete('cascade');

            $table->unsignedBigInteger('mag_vol_id')->nullable();
            $table->foreign('mag_vol_id')->references('id')->on('mag_vols')->onDelete('cascade');

            $table->unsignedBigInteger('mag_pre_id')->nullable();
            $table->foreign('mag_pre_id')->references('id')->on('mag_pres')->onDelete('cascade');

            $table->unsignedBigInteger('mag_peso_id')->nullable();
            $table->foreign('mag_peso_id')->references('id')->on('mag_pesos')->onDelete('cascade');

            $table->unsignedBigInteger('mag_frecu_id')->nullable();	
            $table->foreign('mag_frecu_id')->references('id')->on('mag_frecus')->onDelete('cascade');

            $table->unsignedBigInteger('mag_corriente_id')->nullable();
            $table->foreign('mag_corriente_id')->references('id')->on('mag_corrientes')->onDelete('cascade');

            $table->unsignedBigInteger('mag_pot_id')->nullable();
            $table->foreign('mag_pot_id')->references('id')->on('mag_pots')->onDelete('cascade');

            $table->unsignedBigInteger('mag_capa_id')->nullable();
            $table->foreign('mag_capa_id')->references('id')->on('mag_capas')->onDelete('cascade');

            $table->unsignedBigInteger('mag_temp_id')->nullable();
            $table->foreign('mag_temp_id')->references('id')->on('mag_temps')->onDelete('cascade');

            $table->unsignedBigInteger('mag_vel_id')->nullable();
            $table->foreign('mag_vel_id')->references('id')->on('mag_vels')->onDelete('cascade');

            $table->unsignedBigInteger('accesorio_id')->nullable();
            $table->foreign('accesorio_id')->references('id')->on('accesorios')->onDelete('cascade');

            $table->unsignedBigInteger('proveedor_id')->nullable();
            $table->foreign('proveedor_id')->references('id')->on('proveedors')->onDelete('cascade');
            
            $table->unsignedBigInteger('fabricante_id')->nullable();
            $table->foreign('fabricante_id')->references('id')->on('fabricantes')->onDelete('cascade');

            $table->unsignedBigInteger('propiedad_id')->nullable();
            $table->foreign('propiedad_id')->references('id')->on('propiedads')->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hojadevidas');
    }
};
