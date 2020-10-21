<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shipment;
use Faker\Generator as Faker;

$factory->define(Shipment::class, function (Faker $faker) {
    return [
      'O_C' =>$faker->biasedNumberBetween('25411235','50656834'),
      'CLIENTE' => $faker->name,
      'ID_EMBARQUE' => $faker->biasedNumberBetween('25478468942','50678468942'),
      'FOLIO_FACT_CESCORP'=> $faker->biasedNumberBetween('2254','6506'),
      'CANTIDAD_FACT_CESCORP' => $faker->biasedNumberBetween('254','506'),
      'FECHA_FACT_CESCORP' =>  $faker->dateTime,
      'NOMBRE_TRANSP' => $faker->name,
      'FOLIO_TRANSP' => $faker->biasedNumberBetween('2254','6506'),
      'CANTIDAD_TRANSP' => $faker->biasedNumberBetween('254','506'),
      'FECHA_TRANSP' =>  $faker->dateTime,
      'REP_TRANSP' => $faker->biasedNumberBetween('2545','5066'),
      'CANTIDAD_PAGO_CLIENTE' => $faker->biasedNumberBetween('25466','50688'),
      'FECHA_PAGO_CLIENTE' =>  $faker->dateTime,
      'REP_PAGO_CLIENTE' => $faker->biasedNumberBetween('254','506'),
      'CANTIDAD_PAGO_TRANSP' => $faker->biasedNumberBetween('2547','5067'),
      'FECHA_PAGO_TRANSP' =>  $faker->dateTime,
      'PROFIT' => $faker->biasedNumberBetween('2547','5065')
    ];
});
