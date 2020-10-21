<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
  protected $fillable = [
      'O_C',
      'CLIENTE',
      'ID_EMBARQUE',
      'FOLIO_FACT_CESCORP',
      'CANTIDAD_FACT_CESCORP',
      'FECHA_FACT_CESCORP',
      'NOMBRE_TRANSP',
      'FOLIO_TRANSP',
      'CANTIDAD_TRANSP',
      'FECHA_TRANSP',
      'REP_TRANSP',
      'CANTIDAD_PAGO_CLIENTE',
      'FECHA_PAGO_CLIENTE',
      'REP_PAGO_CLIENTE',
      'CANTIDAD_PAGO_TRANSP',
      'FECHA_PAGO_TRANSP',
      'PROFIT',
  ];
}
