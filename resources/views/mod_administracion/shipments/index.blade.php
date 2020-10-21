@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-truck"></i> EMBARQUES</h1>
  </div>
  <div>
    @can('shipments.create')
    <a href="{{ route('shipments.create')}}"><button class="btn btn-primary" type="button">Crear</button></a>
    @endcan
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
          <form class="form-inline my-2 my-lg-0 justify-content-end">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </div>
      <div id="alert" class="alert alert-info"></div>
      <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID EMBARQUE</th>
                <th>CLIENTE</th>
                <th>FOLIO FACTURA CESCORP</th>
                <th>NOMBRE TRANSPORTISTA</th>
                <th>FOLIO TRANSPORTISTA</th>
                <th>PROFIT</th>
                <th>FECHA</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach($shipments as $shipment)
              <tr>
                <td>{{ $shipment->ID_EMBARQUE }}</td>
                <td>{{ $shipment->CLIENTE }}</td>
                <td>{{ $shipment->FOLIO_FACT_CESCORP }}</td>
                <td>{{ $shipment->NOMBRE_TRANSP }}</td>
                <td>{{ $shipment->FOLIO_TRANSP }}</td>
                <td>{{ $shipment->PROFIT }}</td>
                <td>{{ $shipment->FECHA_FACT_CESCORP }}</td>
                <td>
                  <div class="btn-group">
                  @can('shipments.show')
                  <a href="{{ route('shipments.show', $shipment->id) }}"
                  class="btn btn-cescorp">
                   Ver
                  </a>
                  @endcan
                  @can('shipments.edit')
                  <a href="{{ route('shipments.edit', $shipment->id) }}"
                  class="btn btn-cescorp">
                    <i class="fa fa-lg fa-pencil" ></i>
                  </a>
                  @endcan
                  @can('shipments.destroy')
                    {!! Form::open(['route' => ['shipments.destroy', $shipment->id],
                    'method'=>'DELETE']) !!}
                        <button href="#" class="btn btn-danger">
                          <i class="fa fa-lg fa-trash"></i>
                        </button>
                    {!! Form::close() !!}
                  @endcan
                   </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $shipments->render() }}
        </div>
    </div>
  </div>
</div>
@endsection
