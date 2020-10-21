<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Factrecibida;
use Faker\Generator as Faker;

$factory->define(Factrecibida::class, function (Faker $faker) {
    return [

      'EMPRESA'=>$faker->name,
      'FOLIO' => $faker->biasedNumberBetween('100','200'),
      'SUBTOTAL' => $faker->biasedNumberBetween('300','400'),
      'IVA' => $faker->biasedNumberBetween('500','600'),
      'IVA_RETENIDO' => $faker->biasedNumberBetween('700','800'),
      'TOTAL' => $faker->biasedNumberBetween('900','1000'),
      'FECHA_FACTURA' => $faker->dateTime,
      'VENCIMIENTO' => $faker->dateTime,
      'FECHA_PAGO' => $faker->dateTime,
      'CANTIDAD' => $faker->biasedNumberBetween('1000','1100'),
      'BANCO' => $faker->name,
      'STATUS' => $faker->biasedNumberBetween('1','4')

    ];
});
