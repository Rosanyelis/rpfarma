<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_d', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('ndoc');
            $table->string('rp');
            $table->string('nombre_paciente');
            $table->string('rut_paciente');
            $table->string('direccion_paciente');
            $table->string('telefono_paciente');
            $table->string('nombre_doctor');
            $table->string('rut_doctor');
            $table->string('direccion_doctor');
            $table->string('telefono_doctor');
            $table->string('nombre_adquiriente');
            $table->string('rut_adquiriente');
            $table->string('direccion_adquiriente');
            $table->string('telefono_adquiriente');
            $table->string('nombre_vendedor');
            $table->date('fecha_entrega');
            $table->string('hora_entrega');
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
        Schema::dropIfExists('venta_d_s');
    }
}
