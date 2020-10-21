<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactrecibidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factrecibidas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('EMPRESA', 100);
            $table->integer('FOLIO');
            $table->decimal('SUBTOTAL');
            $table->decimal('IVA');
            $table->decimal('IVA_RETENIDO');
            $table->decimal('TOTAL');
            $table->date('FECHA_FACTURA');
            $table->date('VENCIMIENTO')->nullable();
            $table->date('FECHA_PAGO');
            $table->decimal('CANTIDAD');
            $table->string('BANCO', 100);
            $table->integer('STATUS');
            
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
        Schema::dropIfExists('factrecibidas');
    }
}
