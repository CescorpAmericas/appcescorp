@extends('layouts.app')

@section('content')
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i> REPORTE DEL VIAJE </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('repviajes.index')}}"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title"></h3>
          <div class="tile-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-small gris"><i class="icon fa fa-files-o fa-3x"></i>
                  <div class="info">
                    <h4>Datos del Viaje</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <p><strong>Cliente: </strong><label class="text-muted">{{ $repviaje->cliente }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Origen: </strong><label class="text-muted">{{ $repviaje->origen }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Destino: </strong><label class="text-muted">{{ $repviaje->destino}}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Estado: </strong><label class="text-muted">{{ $repviaje->estado }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Unidad: </strong><label class="text-muted">{{ $repviaje->unidad }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Camión: </strong><label class="text-muted">{{ $repviaje->camion }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Proveedor: </strong><label class="text-muted">{{ $repviaje->proveedor }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Referencia: </strong><label class="text-muted">{{ $repviaje->referencia }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Tipo de carga: </strong><label class="text-muted">{{ $repviaje->tipo_carga }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Tipo de viaje: </strong><label class="text-muted">{{ $repviaje->tipo_viaje }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Zona de cruce: </strong><label class="text-muted">{{ $repviaje->zona_cruce }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Fecha de carga: </strong><label class="text-muted">{{ $repviaje->fecha_carga }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Hora de carga: </strong><label class="text-muted">{{ $repviaje->hora_carga }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Fecha de descarga: </strong><label class="text-muted">{{ $repviaje->fecha_carga }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Hora de entrega: </strong><label class="text-muted">{{ $repviaje->hora_carga }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Status: </strong><label class="text-muted">
                  @if ( $repviaje->status =='1')
                    Programado
                  @endif
                  @if ( $repviaje->status =='2')
                    Proceso
                  @endif
                  @if ( $repviaje->status =='3')
                    Concluido
                  @endif
                  @if ( $repviaje->status =='4')
                    Cancelado
                  @endif
                </label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Comentario: </strong><label class="text-muted">{{ $repviaje->comentario }}</label></p>
              </div>
              <div class="col-lg-12">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
                  <div class="info">
                    <h4>Costos del viaje</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <p><strong>PO o CI: </strong><label class="text-muted">{{ $repviaje->po_o_ci }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Flete: </strong><label class="text-muted">$ {{ $repviaje->flete }}</label></p>
              </div>
              <div class="col-lg-12">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
                  <div class="info">
                    <h4>Costos adicionales</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <p><strong>Movimiento en falso: </strong><label class="text-muted">$ {{ $repviaje->moviento_falso }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Transbordo: </strong><label class="text-muted">$ {{ $repviaje->transbordo }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Maniobras de descarga: </strong><label class="text-muted">$ {{ $repviaje->maniobras_descarga }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>SobrePeso: </strong><label class="text-muted">$ {{ $repviaje->sobrepeso }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Estadias: </strong><label class="text-muted">$ {{ $repviaje->estadias }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Seguro: </strong><label class="text-muted">$ {{ $repviaje->seguro }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Moneda: </strong><label class="text-muted">{{ $repviaje->moneda }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Cruce: </strong><label class="text-muted">$ {{ $repviaje->cruce }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>Demoras: </strong><label class="text-muted">$ {{ $repviaje->demoras }}</label></p>
              </div>
              <div class="col-lg-12">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
                  <div class="info">
                    <h4>Costo final</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <p><strong>Subtotal: </strong><label class="text-muted">$ {{ $repviaje->subtotal }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>IVA: </strong><label class="text-muted">$ {{ $repviaje->iva }}</label></p>
              </div>
              <div class="col-md-2">
                <p><strong>RET: </strong><label class="text-muted">$ {{ $repviaje->ret }}</label></p>
              </div>
              <div class="blockquote col-md-2">
                <p><strong>Total: </strong><label class="text-muted">$ {{ $repviaje->total }}</label></p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
