@extends('layouts.app')

@section('content')
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i> Reporte de viaje </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('repviajes.index')}}"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a></li>

        </ul>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="col-md-12">
              <br>
              <p><strong>Cliente: </strong><label class="text-muted">{{ $repviaje->cliente }}</label></p>
              <p><strong>Origen: </strong><label class="text-muted">{{ $repviaje->origen }}</label></p>
              <p><strong>Destino: </strong><label class="text-muted">{{ $repviaje->destino}}</label></p>
              <p><strong>Estado: </strong><label class="text-muted">{{ $repviaje->estado }}</label></p>
              <p><strong>Unidad: </strong><label class="text-muted">{{ $repviaje->unidad }}</label></p>
              <p><strong>Camión: </strong><label class="text-muted">{{ $repviaje->camion }}</label></p>
              <p><strong>Proveedor: </strong><label class="text-muted">{{ $repviaje->proveedor }}</label></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="col-md-12">
              <br>
              <p><strong>Referencia: </strong><label class="text-muted">{{ $repviaje->referencia }}</label></p>
              <p><strong>Tipo de carga: </strong><label class="text-muted">{{ $repviaje->tipo_carga }}</label></p>
              <p><strong>Tipo de viaje: </strong><label class="text-muted">{{ $repviaje->tipo_viaje }}</label></p>
              <p><strong>Zona de cruce: </strong><label class="text-muted">{{ $repviaje->zona_cruce }}</label></p>
              <p><strong>Fecha de carga: </strong><label class="text-muted">{{ $repviaje->fecha_carga }}</label></p>
              <p><strong>Hora de carga: </strong><label class="text-muted">{{ $repviaje->hora_carga }}</label></p>
              <p><strong>Fecha de descarga: </strong><label class="text-muted">{{ $repviaje->fecha_carga }}</label></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="col-md-12">
              <br>
              <p><strong>Hora de entrega: </strong><label class="text-muted">{{ $repviaje->hora_carga }}</label></p>
              <p><strong>Status: </strong><label class="text-muted">{{ $repviaje->status }}</label></p>
              <p><strong>Comentario: </strong><label class="text-muted">{{ $repviaje->comentario }}</label></p>
              <p><strong>PO o CI: </strong><label class="text-muted">{{ $repviaje->po_o_ci }}</label></p>
              <p><strong>Flete: </strong><label class="text-muted">{{ $repviaje->flete }}</label></p>
              <p><strong>Movimiento en falso: </strong><label class="text-muted">{{ $repviaje->moviento_falso }}</label></p>
              <p><strong>Transbordo: </strong><label class="text-muted">{{ $repviaje->transbordo }}</label></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="col-md-12">
              <br>
              <p><strong>Maniobras de descarga: </strong><label class="text-muted">{{ $repviaje->maniobras_descarga }}</label></p>
              <p><strong>SobrePeso: </strong><label class="text-muted">{{ $repviaje->sobrepeso }}</label></p>
              <p><strong>Estadias: </strong><label class="text-muted">{{ $repviaje->estadias }}</label></p>
              <p><strong>Seguro: </strong><label class="text-muted">{{ $repviaje->seguro }}</label></p>
              <p><strong>Moneda: </strong><label class="text-muted">{{ $repviaje->moneda }}</label></p>
              <p><strong>Cruce: </strong><label class="text-muted">{{ $repviaje->cruce }}</label></p>
              <p><strong>Demoras: </strong><label class="text-muted">{{ $repviaje->demoras }}</label></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="col-md-12">
              <br>
              <p><strong>Subtotal: </strong><label class="text-muted">{{ $repviaje->subtotal }}</label></p>
              <p><strong>IVA: </strong><label class="text-muted">{{ $repviaje->iva }}</label></p>
              <p><strong>RET: </strong><label class="text-muted">{{ $repviaje->ret }}</label></p>
              <p><strong>Total: </strong><label class="text-muted">{{ $repviaje->total }}</label></p>
            </div>
          </div>
        </div>
      </div>
@endsection
