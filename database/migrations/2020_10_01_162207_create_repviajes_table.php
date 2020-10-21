<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepviajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repviajes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('cliente', 100)->required();
            $table->string('origen', 100)->required();
            $table->string('destino', 100)->required();
            $table->string('estado', 100)->required();
            $table->string('unidad', 100)->required();
            $table->string('camion', 100)->required();
            $table->string('proveedor', 100)->required();
            $table->string('referencia',100)->required();
            $table->string('tipo_carga',100)->required();
            $table->string('tipo_viaje',100)->required();
            $table->string('zona_cruce', 50)->required();
            $table->date('fecha_carga')->required();
            $table->time('hora_carga')->required();
            $table->date('fecha_descarga', 50)->required();
            $table->time('hora_entrega')->required();
            $table->integer('status')->required();
            $table->string('comentario',200)->required();
            $table->string('po_o_ci')->required();
            $table->decimal('flete')->required();
            $table->decimal('moviento_falso')->required();
            $table->decimal('transbordo')->required();
            $table->decimal('maniobras_descarga')->required();
            $table->decimal('sobrepeso')->required();
            $table->decimal('estadias')->required();
            $table->decimal('seguro')->required();
            $table->string('moneda', 50)->required();
            $table->decimal('cruce')->required();
            $table->decimal('demoras')->required();
            $table->decimal('subtotal')->required();
            $table->decimal('iva')->required();
            $table->decimal('ret')->required();
            $table->decimal('total')->required();

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
        Schema::dropIfExists('repviajes');
    }
}
