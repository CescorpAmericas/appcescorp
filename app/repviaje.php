<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repviaje extends Model
{
  protected $fillable = [
    'cliente',
    'origen',
    'destino',
    'estado',
    'unidad',
    'camion',
    'proveedor',
    'referencia',
    'tipo_carga',
    'tipo_viaje',
    'zona_cruce',
    'fecha_carga',
    'hora_carga',
    'fecha_descarga',
    'hora_entrega',
    'status',
    'comentario',
    'po_o_ci',
    'flete',
    'moviento_falso',
    'transbordo',
    'maniobras_descarga',
    'sobrepeso',
    'estadias',
    'seguro',
    'moneda',
    'cruce',
    'demoras',
    'subtotal',
    'iva',
    'ret',
    'total',
  ];
}
