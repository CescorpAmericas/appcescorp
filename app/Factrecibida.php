<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factrecibida extends Model
{
  protected $fillable = [
    'EMPRESA',
    'FOLIO',
    'SUBTOTAL',
    'IVA',
    'IVA_RETENIDO',
    'TOTAL',
    'FECHA_FACTURA',
    'VENCIMIENTO',
    'FECHA_PAGO',
    'CANTIDAD',
    'BANCO',
    'STATUS',
  ];
}
