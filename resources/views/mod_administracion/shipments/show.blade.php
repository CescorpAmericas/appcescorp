@extends('layouts.app')

@section('content')
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i> EMBARQUES</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('shipments.index')}}"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a></li>

        </ul>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="col-md-12">
              <br>
              <p><strong>O C &nbsp</strong><label class="text-muted">{{ $shipment->O_C }}</label></p>
              <p><strong>CLIENTE &nbsp</strong><label class="text-muted">{{ $shipment->CLIENTE }}</label></p>
              <p><strong>ID EMBARQUE &nbsp</strong><label class="text-muted">{{ $shipment->ID_EMBARQUE }}</label></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title">FACTURA CES&CO</h3>
            <div class="col-md-12">
              <br>
              <p><strong>FOLIO &nbsp</strong><label class="text-muted">{{ $shipment->FOLIO_FACT_CESCORP }}</label></p>
              <p><strong>CANTIDAD &nbsp</strong><label class="text-muted">{{ $shipment->CANTIDAD_FACT_CESCORP }}</label></p>
              <p><strong>FECHA &nbsp</strong><label class="text-muted">{{ $shipment->FECHA_FACT_CESCORP }}</label></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title">TRANSPORTISTA</h3>
            <div class="col-md-12">
              <br>
              <p><strong>NOMBRE &nbsp</strong><label class="text-muted">{{ $shipment->NOMBRE_TRANSP }}</label></p>
              <p><strong>FOLIO &nbsp</strong><label class="text-muted">{{ $shipment->FOLIO_TRANSP }}</label></p>
              <p><strong>CANTIDAD &nbsp</strong><label class="text-muted">{{ $shipment->CANTIDAD_TRANSP }}</label></p>
              <p><strong>FECHA &nbsp</strong><label class="text-muted">{{ $shipment->FECHA_TRANSP }}</label></p>
              <p><strong>REP &nbsp</strong><label class="text-muted">{{ $shipment->REP_TRANSP }}</label></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title">PAGO CLIENTE</h3>
            <div class="col-md-12">
              <br>
              <p><strong>CANTIDAD &nbsp</strong><label class="text-muted">{{ $shipment->CANTIDAD_PAGO_CLIENTE }}</label></p>
              <p><strong>FECHA &nbsp</strong><label class="text-muted">{{ $shipment->FECHA_PAGO_CLIENTE }}</label></p>
              <p><strong>REP &nbsp</strong><label class="text-muted">{{ $shipment->REP_PAGO_CLIENTE }}</label></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title">PAGO TRANSPORTISTA</h3>
            <div class="col-md-12">
              <br>
              <p><strong>CANTIDAD  &nbsp</strong><label class="text-muted">{{ $shipment->CANTIDAD_PAGO_TRANSP }}</label></p>
              <p><strong>FECHA &nbsp</strong><label class="text-muted">{{ $shipment->FECHA_PAGO_TRANSP }}</label></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <h3 class="tile-title">PROFIT</h3>
            <div class="col-md-12">
              <br>
              <h3 class="text-muted">{{ $shipment->PROFIT }}</h3>
            </div>
          </div>
        </div>
      </div>
@endsection
