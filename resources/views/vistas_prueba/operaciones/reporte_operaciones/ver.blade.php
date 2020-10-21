@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text"></i> REPORTE OPERACIONES</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="/reporte_operaciones"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a></li>

  </ul>
</div>
<div class="tile">
  <div class="row">
    <div class="col-md-3">
        <div class="col-md-12">
          <br>
          <p><strong>No. Viaje</strong><label class="text-muted">: 1</label></p>
          <p><strong>Cliente</strong><label class="text-muted">: METGO</label></p>
          <p><strong>Fecha</strong><label class="text-muted">: 06/02/2020</label></p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12">
          <br>
          <p><strong>Origen</strong><label class="text-muted">: GPE</label></p>
          <p><strong>Destino</strong><label class="text-muted">: Queretaro</label></p>
          <p><strong>Trasporte</strong><label class="text-muted">: Uriel</label></p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12">
          <br>
          <p><strong>Unidad</strong><label class="text-muted">: Tracto</label></p>
          <p><strong>Capacidad</strong><label class="text-muted">: Seca 53 </label></p>
          <p><strong>Cita</strong><label class="text-muted">: 03:00 a. m..</label></p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12">
          <br>
          <p><strong>Tiempo de carga</strong><label class="text-muted">: 6:00 a. m / 08:00 a. m</label></p>
          <p><strong>Modulo</strong><label class="text-muted">: N/A</label></p>
          <p><strong>Tiempo de descarga</strong><label class="text-muted">04:20:00 a. m./06:00:00 a. m.</label></p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-12">
          <br>
          <p><strong>OBSERVACIONES Y COMENTARIOS</strong><label class="text-muted">: TODO OK SIN PROBLEMAS LA CARGA LLEGO INTACTA</label></p>
        </div>
    </div>
  </div>
</div>
@endsection
