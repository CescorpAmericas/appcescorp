@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text"></i>  FACTURAS RECIBIDAS</h1>
  </div>
  <div>
    @can('factrecibidas.create')
    <a href="{{ route('factrecibidas.create')}}"><button class="btn btn-primary" type="button">Crear</button></a>
    @endcan
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pendientes</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pagadas</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sin factura pendientes</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-sin_fac_pagada" role="tab" aria-controls="nav-contact" aria-selected="false">Sin factura pagadas</a>
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
                    <th>EMPRESA</th>
                    <th>FOLIO</th>
                    <th>SUB TOTAL</th>
                    <th>IVA</th>
                    <th>IVA RETENIDO</th>
                    <th>TOTAL</th>
                    <th>FECHA FACTURA</th>
                    <th>VENCIMIENTO</th>
                    <th>FECHA PAGO</th>
                    <th>CANTIDAD</th>
                    <th>BANCO</th>
                    <th>STATUS</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($factrecibidas1 as $factrecibida)
                  <tr>
                    <td>{{ $factrecibida->EMPRESA }}</td>
                    <td>{{ $factrecibida->FOLIO }}</td>
                    <td>{{ $factrecibida->SUBTOTAL }}</td>
                    <td>{{ $factrecibida->IVA }}</td>
                    <td>{{ $factrecibida->IVA_RETENIDO }}</td>
                    <td>{{ $factrecibida->TOTAL }}</td>
                    <td>{{ $factrecibida->FECHA_FACTURA }}</td>
                    <td>{{ $factrecibida->VENCIMIENTO }}</td>
                    <td>{{ $factrecibida->FECHA_PAGO }}</td>
                    <td>{{ $factrecibida->CANTIDAD }}</td>
                    <td>{{ $factrecibida->BANCO }}</td>
                    <td class="text-danger">
                      @if ( $factrecibida->STATUS =='1')
                      Pendiente
                      @endif
                    </td>
                    <td>
                      <div class="btn-group">
                      @can('factrecibidas.edit')
                      <a href="{{ route('factrecibidas.edit', $factrecibida->id) }}"
                      class="btn btn-cescorp">
                        <i class="fa fa-lg fa-pencil" ></i>
                      </a>
                      @endcan
                      @can('factrecibidas.destroy')
                        {!! Form::open(['route' => ['factrecibidas.destroy', $factrecibida->id],
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
              {{ $factrecibidas1->render() }}
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
                  <th>EMPRESA</th>
                  <th>FOLIO</th>
                  <th>SUB TOTAL</th>
                  <th>IVA</th>
                  <th>IVA RETENIDO</th>
                  <th>TOTAL</th>
                  <th>FECHA FACTURA</th>
                  <th>VENCIMIENTO</th>
                  <th>FECHA PAGO</th>
                  <th>CANTIDAD</th>
                  <th>BANCO</th>
                  <th>STATUS</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($factrecibidas2 as $factrecibida)
                <tr>
                  <td>{{ $factrecibida->EMPRESA }}</td>
                  <td>{{ $factrecibida->FOLIO }}</td>
                  <td>{{ $factrecibida->SUBTOTAL }}</td>
                  <td>{{ $factrecibida->IVA }}</td>
                  <td>{{ $factrecibida->IVA_RETENIDO }}</td>
                  <td>{{ $factrecibida->TOTAL }}</td>
                  <td>{{ $factrecibida->FECHA_FACTURA }}</td>
                  <td>{{ $factrecibida->VENCIMIENTO }}</td>
                  <td>{{ $factrecibida->FECHA_PAGO }}</td>
                  <td>{{ $factrecibida->CANTIDAD }}</td>
                  <td>{{ $factrecibida->BANCO }}</td>
                  <td class="text-success">
                    @if ( $factrecibida->STATUS =='2')
                    Pagada
                    @endif
                  </td>

                  <td>
                    <div class="btn-group">
                    @can('factrecibidas.edit')
                    <a href="{{ route('factrecibidas.edit', $factrecibida->id) }}"
                    class="btn btn-cescorp">
                      <i class="fa fa-lg fa-pencil" ></i>
                    </a>
                    @endcan
                    @can('factrecibidas.destroy')
                      {!! Form::open(['route' => ['factrecibidas.destroy', $factrecibida->id],
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
              {{ $factrecibidas2->render() }}
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
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
                  <th>EMPRESA</th>
                  <th>FOLIO</th>
                  <th>SUB TOTAL</th>
                  <th>IVA</th>
                  <th>IVA RETENIDO</th>
                  <th>TOTAL</th>
                  <th>FECHA FACTURA</th>
                  <th>VENCIMIENTO</th>
                  <th>FECHA PAGO</th>
                  <th>CANTIDAD</th>
                  <th>BANCO</th>
                  <th>STATUS</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($factrecibidas3 as $factrecibida)
                <tr>
                  <td>{{ $factrecibida->EMPRESA }}</td>
                  <td>{{ $factrecibida->FOLIO }}</td>
                  <td>{{ $factrecibida->SUBTOTAL }}</td>
                  <td>{{ $factrecibida->IVA }}</td>
                  <td>{{ $factrecibida->IVA_RETENIDO }}</td>
                  <td>{{ $factrecibida->TOTAL }}</td>
                  <td>{{ $factrecibida->FECHA_FACTURA }}</td>
                  <td>{{ $factrecibida->VENCIMIENTO }}</td>
                  <td>{{ $factrecibida->FECHA_PAGO }}</td>
                  <td>{{ $factrecibida->CANTIDAD }}</td>
                  <td>{{ $factrecibida->BANCO }}</td>
                  <td class="text-danger">
                    @if ( $factrecibida->STATUS =='3')
                    Sin factura pendiente
                    @endif
                  </td>

                  <td>
                    <div class="btn-group">
                    @can('factrecibidas.edit')
                    <a href="{{ route('factrecibidas.edit', $factrecibida->id) }}"
                    class="btn btn-cescorp">
                      <i class="fa fa-lg fa-pencil" ></i>
                    </a>
                    @endcan
                    @can('factrecibidas.destroy')
                      {!! Form::open(['route' => ['factrecibidas.destroy', $factrecibida->id],
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
              {{ $factrecibidas3->render() }}
            </div>
        </div>
        <div class="tab-pane fade" id="nav-sin_fac_pagada" role="tabpanel" aria-labelledby="nav-contact-tab">
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
                  <th>EMPRESA</th>
                  <th>FOLIO</th>
                  <th>SUB TOTAL</th>
                  <th>IVA</th>
                  <th>IVA RETENIDO</th>
                  <th>TOTAL</th>
                  <th>FECHA FACTURA</th>
                  <th>VENCIMIENTO</th>
                  <th>FECHA PAGO</th>
                  <th>CANTIDAD</th>
                  <th>BANCO</th>
                  <th>STATUS</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($factrecibidas4 as $factrecibida)
                <tr>
                  <td>{{ $factrecibida->EMPRESA }}</td>
                  <td>{{ $factrecibida->FOLIO }}</td>
                  <td>{{ $factrecibida->SUBTOTAL }}</td>
                  <td>{{ $factrecibida->IVA }}</td>
                  <td>{{ $factrecibida->IVA_RETENIDO }}</td>
                  <td>{{ $factrecibida->TOTAL }}</td>
                  <td>{{ $factrecibida->FECHA_FACTURA }}</td>
                  <td>{{ $factrecibida->VENCIMIENTO }}</td>
                  <td>{{ $factrecibida->FECHA_PAGO }}</td>
                  <td>{{ $factrecibida->CANTIDAD }}</td>
                  <td>{{ $factrecibida->BANCO }}</td>
                  <td class="text-success">
                    @if ( $factrecibida->STATUS =='4')
                    Sin factura pagada
                    @endif
                  </td>
                  <td>
                    <div class="btn-group">
                    @can('factrecibidas.edit')
                    <a href="{{ route('factrecibidas.edit', $factrecibida->id) }}"
                    class="btn btn-cescorp">
                      <i class="fa fa-lg fa-pencil" ></i>
                    </a>
                    @endcan
                    @can('factrecibidas.destroy')
                      {!! Form::open(['route' => ['factrecibidas.destroy', $factrecibida->id],
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
              {{ $factrecibidas4->render() }}
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
