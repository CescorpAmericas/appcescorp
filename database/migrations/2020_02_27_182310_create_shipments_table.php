<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('O_C')->required();
            $table->string('CLIENTE', 100)->required();
            $table->string('ID_EMBARQUE')->unique()->required();
            $table->string('FOLIO_FACT_CESCORP', 100)->required();
            $table->decimal('CANTIDAD_FACT_CESCORP')->required();
            $table->date('FECHA_FACT_CESCORP')->required();
            $table->string('NOMBRE_TRANSP', 100)->required();
            $table->string('FOLIO_TRANSP', 100)->required();
            $table->decimal('CANTIDAD_TRANSP')->required();
            $table->date('FECHA_TRANSP')->required();
            $table->string('REP_TRANSP', 50)->required();
            $table->decimal('CANTIDAD_PAGO_CLIENTE')->required();
            $table->date('FECHA_PAGO_CLIENTE')->required();
            $table->string('REP_PAGO_CLIENTE', 50)->required();
            $table->decimal('CANTIDAD_PAGO_TRANSP')->required();
            $table->date('FECHA_PAGO_TRANSP')->required();
            $table->decimal('PROFIT')->required();

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
        Schema::dropIfExists('shipments');
    }
}
