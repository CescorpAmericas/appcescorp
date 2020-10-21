@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text"></i>  FACTURAS EMITIDAS</h1>
  </div>
  <div>
    @can('factemitidas.create')
    <a href="{{ route('factemitidas.create') }}"><button class="btn btn-primary" type="button">Crear</button></a>
    @endcan
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Facturas emitidas</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Canceladas</a>
          <!--<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>-->
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                    <th>CLIENTE</th>
                    <th>FACTURA</th>
                    <th>RAZON SOCIAL</th>
                    <th>TOTAL FACTURADO</th>
                    <th>SUB TOTAL</th>
                    <th>IVA TOTAL</th>
                    <th>IVA RETENIDO</th>
                    <th>FECHA</th>
                    <th>STATUS</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($factemitidas1 as $factemitida)
                  <tr>
                    <td>{{ $factemitida->CLIENTE }}</td>
                    <td>{{ $factemitida->FACTURA }}</td>
                    <td>{{ $factemitida->RAZON_SOCIAL }}</td>
                    <td>{{ $factemitida->TOTAL_FACTURADO }}</td>
                    <td>{{ $factemitida->SUB_TOTAL }}</td>
                    <td>{{ $factemitida->IVA_TOTAL }}</td>
                    <td>{{ $factemitida->IVA_RETENIDO }}</td>
                    <td>{{ $factemitida->FECHA }}</td>
                    <td class="text-success">
                      @if ( $factemitida->STATUS =='1')
                      Activo
                      @endif
                      @if ( $factemitida->STATUS =='2')
                        Cancelado
                      @endif
                  </td>
                    <td>
                      <div class="btn-group">
                      @can('factemitidas.edit')
                      <a href="{{ route('factemitidas.edit', $factemitida->id) }}"
                      class="btn btn-cescorp">
                        <i class="fa fa-lg fa-pencil" ></i>
                      </a>
                      @endcan
                      @can('factemitidas.destroy')
                        {!! Form::open(['route' => ['factemitidas.destroy', $factemitida->id],
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
              {{ $factemitidas1->render() }}
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>CLIENTE</th>
                    <th>FACTURA</th>
                    <th>RAZON SOCIAL</th>
                    <th>TOTAL FACTURADO</th>
                    <th>SUB TOTAL</th>
                    <th>IVA TOTAL</th>
                    <th>IVA RETENIDO</th>
                    <th>FECHA</th>
                    <th>STATUS</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($factemitidas2 as $factemitida2)
                  <tr>
                    <td>{{ $factemitida2->CLIENTE }}</td>
                    <td>{{ $factemitida2->FACTURA }}</td>
                    <td>{{ $factemitida2->RAZON_SOCIAL }}</td>
                    <td>{{ $factemitida2->TOTAL_FACTURADO }}</td>
                    <td>{{ $factemitida2->SUB_TOTAL }}</td>
                    <td>{{ $factemitida2->IVA_TOTAL }}</td>
                    <td>{{ $factemitida2->IVA_RETENIDO }}</td>
                    <td>{{ $factemitida2->FECHA }}</td>
                    <td class="text-danger">
                      @if ( $factemitida2->STATUS  =='2')
                      Cancelado
                      @endif
                      @if ( $factemitida2->STATUS =='1')
                        Activo
                      @endif
                    </td>
                    <td>
                      <div class="btn-group">
                      @can('factemitidas.edit')
                      <a href="{{ route('factemitidas.edit', $factemitida2->id) }}"
                      class="btn btn-cescorp">
                        <i class="fa fa-lg fa-pencil" ></i>
                      </a>
                      @endcan
                      @can('factemitidas.destroy')
                        {!! Form::open(['route' => ['factemitidas.destroy', $factemitida2->id],
                        'method'=>'DELETE']) !!}
                            <button class="btn btn-danger">
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
              {{ $factemitidas2->render() }}
            </div>
        </div>
        <!--<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>-->
      </div>
    </div>
  </div>
</div>
@endsection
