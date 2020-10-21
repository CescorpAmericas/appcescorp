<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactemitidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factemitidas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('CLIENTE', 100)->required();
            $table->string('FACTURA', 100)->required();
            $table->string('RAZON_SOCIAL', 100)->required();
            $table->decimal('TOTAL_FACTURADO')->required();
            $table->decimal('SUB_TOTAL')->required();
            $table->decimal('IVA_TOTAL')->required();
            $table->decimal('IVA_RETENIDO')->required();
            $table->date('FECHA')->required();
            $table->integer('STATUS')->required();

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
        Schema::dropIfExists('factemitidas');
    }
}
