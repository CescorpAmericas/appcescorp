<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\repviaje;
use Faker\Generator as Faker;

$factory->define(repviaje::class, function (Faker $faker) {
    return [
      'cliente' => $faker->randomElement(['NEFAB','Hellmann Gdl','Send and go','Hellmann Pbc']),
      'origen' => $faker->randomElement(['Apodaca','Laredo','Santa Catarina','Guadalajara']),
      'destino' => $faker->randomElement(['Coatzalcoalcos','Ramos Arizpe','Querétaro','Reynosa']),
      'estado' => $faker->randomElement(['Veracruz','Coahuila','Texas','Nuevo León']),
      'unidad' => $faker->randomElement(['Caja seca 53','Plataforma','Caja seca']),
      'camion' => $faker->randomElement(['Tractor','Camion 3.5','Rabon']),
      'proveedor' => $faker->randomElement(['Turr','Interflet','Zampe','Losa Express']),
      'referencia' => $faker->biasedNumberBetween('2000','5000'),
      'tipo_carga' => $faker->randomElement(['Regular']),
      'tipo_viaje' => $faker->randomElement(['Nacional','Local','Expo','Impo']),
      'zona_cruce' => $faker->randomElement(['Laredo','N/A']),
      'fecha_carga' => $faker->dateTime,
      'hora_carga' => $faker->time,
      'fecha_descarga' => $faker->dateTime,
      'hora_entrega' => $faker->time,
      'status' => $faker->biasedNumberBetween('1','3'),
      'efectividad_viaje' => $faker->randomElement(['Bien','Regular','Mal']),
      'comentario' => $faker->randomElement(['Bien','Mal','Super Mal']),
      'po_o_ci' => $faker->biasedNumberBetween('2000','5000'),
      'flete' => $faker->biasedNumberBetween('2000','9000'),
      'moviento_falso' => $faker->biasedNumberBetween('10','100'),
      'transbordo' => $faker->biasedNumberBetween('10','100'),
      'maniobras_descarga' => $faker->biasedNumberBetween('10','100'),
      'sobrepeso' => $faker->biasedNumberBetween('10','100'),
      'estadias' => $faker->biasedNumberBetween('10','100'),
      'seguro' => $faker->biasedNumberBetween('10','100'),
      'moneda' => $faker->randomElement(['USA','MX']),
      'cruce' => $faker->biasedNumberBetween('10','100'),
      'demoras' => $faker->biasedNumberBetween('10','100'),
      'subtotal' => $faker->biasedNumberBetween('2000','9000'),
      'iva' => $faker->biasedNumberBetween('2000','9000'),
      'ret' => $faker->biasedNumberBetween('2000','9000'),
      'total' => $faker->biasedNumberBetween('2000','9000')
    ];
});
