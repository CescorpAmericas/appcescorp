@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text"></i> REPORTE VIAJES</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="/reporte_viajes"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a></li>

  </ul>
</div>
<div class="tile">
  <div class="row">
    <div class="col-md-3">
        <div class="col-md-12">
          <br>
          <p><strong>Cliente</strong><label class="text-muted">: Hellmann MTY</label></p>
          <p><strong>Origen</strong><label class="text-muted">: Laredo tx.</label></p>
          <p><strong>Destino</strong><label class="text-muted">: Altamira</label></p>
          <p><strong>Estado</strong><label class="text-muted">: Tamaulipas</label></p>
          <p><strong>Unidad</strong><label class="text-muted">: Caja seca </label></p>
          <p><strong>Camión</strong><label class="text-muted">: Camion 3.5</label></p>
          <p><strong>Proveedor</strong><label class="text-muted">: Seoane</label></p>
          <p><strong>Referencia</strong><label class="text-muted">: CESCORP2020-244</label></p>
          <p><strong>Tipo de carga</strong><label class="text-muted">: Regular</label></p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12">
          <br>
          <p><strong>Tipo de viaje</strong><label class="text-muted">: Impo.</label></p>
          <p><strong>Zona de cruce</strong><label class="text-muted">: Colombia</label></p>
          <p><strong>Fecha de carga</strong><label class="text-muted">: 30/01/2020 </label></p>
          <p><strong>Hora de carga</strong><label class="text-muted">: 4:00 PM</label></p>
          <p><strong>Fecha de descarga</strong><label class="text-muted">: 04/02/2020</label></p>
          <p><strong>Hora de entrega</strong><label class="text-muted">: 11:20 am </label></p>
          <p><strong>Status</strong><label class="text-muted">: Concluido</label></p>
          <p><strong>Comentario</strong><label class="text-muted">: Todo bien</label></p>
          <p><strong>POD</strong><label class="text-muted">: Si</label></p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12">
          <br>
          <p><strong>PO O CI </strong><label class="text-muted">: Na</label></p>
          <p><strong>Flete</strong><label class="text-muted">: Na</label></p>
          <p><strong>Movimiento en falso</strong><label class="text-muted">: Na</label></p>
          <p><strong>Transbordo</strong><label class="text-muted">: Na</label></p>
          <p><strong>Maniobras descarga</strong><label class="text-muted">: Na</label></p>
          <p><strong>Sobrepeso</strong><label class="text-muted">: Na</label></p>
          <p><strong>Estadias</strong><label class="text-muted">: Na</label></p>
          <p><strong>Seguro</strong><label class="text-muted">: Na</label></p>
          <p><strong>Moneda</strong><label class="text-muted">: Na</label></p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12">
          <br>
          <p><strong>Cruce</strong><label class="text-muted">: Na</label></p>
          <p><strong>Demoras</strong><label class="text-muted">: Na</label></p>
          <p><strong>Subtotal</strong><label class="text-muted">: Na</label></p>
          <p><strong>IVA 16%</strong><label class="text-muted">: Na</label></p>
          <p><strong>RET 4%</strong><label class="text-muted">: Na</label></p>
          <p><strong>Total</strong><label class="text-muted">: Na</label></p>
        </div>
    </div>
  </div>
</div>
@endsection
