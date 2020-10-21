<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factemitida extends Model
{
  protected $fillable = [
      'CLIENTE',
      'FACTURA',
      'RAZON_SOCIAL',
      'TOTAL_FACTURADO',
      'SUB_TOTAL',
      'IVA_TOTAL',
      'IVA_RETENIDO',
      'FECHA',
      'STATUS',
  ];
}
