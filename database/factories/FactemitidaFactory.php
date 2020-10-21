<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Factemitida;
use Faker\Generator as Faker;

$factory->define(Factemitida::class, function (Faker $faker) {
    return [

    'CLIENTE' => $faker->name,
    'FACTURA' => $faker->biasedNumberBetween('2254','6506'),
    'RAZON_SOCIAL' => $faker->name,
    'TOTAL_FACTURADO' => $faker->biasedNumberBetween('2547','5067'),
    'SUB_TOTAL' => $faker->biasedNumberBetween('2547','5067'),
    'IVA_TOTAL' => $faker->biasedNumberBetween('2547','5067'),
    'IVA_RETENIDO' => $faker->biasedNumberBetween('2547','5067'),
    'FECHA' => $faker->dateTime,
    'STATUS' => $faker->biasedNumberBetween('1','2')
    ];
});
