<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_operaciones', function (Blueprint $table) {
            $table->uuid('rol_id');
            $table->uuid('operacion_id');
            $table->timestamps();

            $table->foreign('rol_id')
                ->references('id')
                ->on('rols')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('operacion_id')
                ->references('id')
                ->on('operaciones')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_operacions');
    }
}
