@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-truck"></i> REPORTE VIAJES</h1>
  </div>
  <div>
    @can('repviajes.create')
    <a href="{{ route('repviajes.create') }}"><button class="btn btn-primary" type="button">Crear</button></a>
    @endcan
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Programado</a>
          <a class="nav-item nav-link" id="nav-proceso-tab" data-toggle="tab" href="#nav-proceso" role="tab" aria-controls="nav-proceso" aria-selected="false">Proceso</a>
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Concluidos</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Canceladas</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
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
                    <th>Cliente</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Estado</th>
                    <th>Unidad</th>
                    <th>Camión</th>
                    <th>Proveedor</th>
                    <th>Referencia</th>
                    <th>Status</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($repviajes3 as $repviaje3)
                  <tr>
                    <td>{{ $repviaje3->cliente }}</td>
                    <td>{{ $repviaje3->origen }}</td>
                    <td>{{ $repviaje3->destino }}</td>
                    <td>{{ $repviaje3->estado }}</td>
                    <td>{{ $repviaje3->unidad }}</td>
                    <td>{{ $repviaje3->camion }}</td>
                    <td>{{ $repviaje3->proveedor }}</td>
                    <td>{{ $repviaje3->referencia }}</td>
                    <td class="text-success">
                    @if ( $repviaje3->status =='1')
                      Programado
                    @endif
                    @if ( $repviaje3->status =='2')
                      Proceso
                    @endif
                    @if ( $repviaje3->status =='3')
                      Concluido
                    @endif
                    @if ( $repviaje3->status =='4')
                      Cancelado
                    @endif
                    </td>
                    <td>
                      <div class="btn-group">
                      @can('repviajes.show')
                      <a href="{{ route('repviajes.show', $repviaje3->id) }}"
                      class="btn btn-cescorp">
                       Ver
                      </a>
                      @endcan
                      @can('repviajes.edit')
                      <a href="{{ route('repviajes.edit', $repviaje3->id) }}"
                      class="btn btn-cescorp">
                        <i class="fa fa-lg fa-pencil" ></i>
                      </a>
                      @endcan
                      @can('repviajes.destroy')
                        {!! Form::open(['route' => ['repviajes.destroy', $repviaje3->id],
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
              {{ $repviajes3->render() }}
            </div>
        </div>
        <div class="tab-pane fade" id="nav-proceso" role="tabpanel" aria-labelledby="nav-proceso-tab">
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
                    <th>Cliente</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Estado</th>
                    <th>Unidad</th>
                    <th>Camión</th>
                    <th>Proveedor</th>
                    <th>Referencia</th>
                    <th>Status</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($repviajes4 as $repviaje4)
                  <tr>
                    <td>{{ $repviaje4->cliente }}</td>
                    <td>{{ $repviaje4->origen }}</td>
                    <td>{{ $repviaje4->destino }}</td>
                    <td>{{ $repviaje4->estado }}</td>
                    <td>{{ $repviaje4->unidad }}</td>
                    <td>{{ $repviaje4->camion }}</td>
                    <td>{{ $repviaje4->proveedor }}</td>
                    <td>{{ $repviaje4->referencia }}</td>
                    <td class="text-warning">
                    @if ( $repviaje4->status =='1')
                      Programado
                    @endif
                    @if ( $repviaje4->status =='2')
                      Proceso
                    @endif
                    @if ( $repviaje4->status =='3')
                      Concluido
                    @endif
                    @if ( $repviaje4->status =='4')
                      Cancelado
                    @endif
                    </td>
                    <td>
                      <div class="btn-group">
                      @can('repviajes.show')
                      <a href="{{ route('repviajes.show', $repviaje4->id) }}"
                      class="btn btn-cescorp">
                       Ver
                      </a>
                      @endcan
                      @can('repviajes.edit')
                      <a href="{{ route('repviajes.edit', $repviaje4->id) }}"
                      class="btn btn-cescorp">
                        <i class="fa fa-lg fa-pencil" ></i>
                      </a>
                      @endcan
                      @can('repviajes.destroy')
                        {!! Form::open(['route' => ['repviajes.destroy', $repviaje4->id],
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
              {{ $repviajes4->render() }}
            </div>
        </div>
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
                    <th>Cliente</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Estado</th>
                    <th>Unidad</th>
                    <th>Camión</th>
                    <th>Proveedor</th>
                    <th>Referencia</th>
                    <th>Status</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($repviajes1 as $repviaje1)
                  <tr>
                    <td>{{ $repviaje1->cliente }}</td>
                    <td>{{ $repviaje1->origen }}</td>
                    <td>{{ $repviaje1->destino }}</td>
                    <td>{{ $repviaje1->estado }}</td>
                    <td>{{ $repviaje1->unidad }}</td>
                    <td>{{ $repviaje1->camion }}</td>
                    <td>{{ $repviaje1->proveedor }}</td>
                    <td>{{ $repviaje1->referencia }}</td>
                    <td class="text-success">
                    @if ( $repviaje1->status =='1')
                      Programado
                    @endif
                    @if ( $repviaje1->status =='2')
                      Proceso
                    @endif
                    @if ( $repviaje1->status =='3')
                      Concluido
                    @endif
                    @if ( $repviaje1->status =='4')
                      Cancelado
                    @endif
                    </td>
                    <td>
                      <div class="btn-group">
                      @can('repviajes.show')
                      <a href="{{ route('repviajes.show', $repviaje1->id) }}"
                      class="btn btn-cescorp">
                       Ver
                      </a>
                      @endcan
                      @can('repviajes.edit')
                      <a href="{{ route('repviajes.edit', $repviaje1->id) }}"
                      class="btn btn-cescorp">
                        <i class="fa fa-lg fa-pencil" ></i>
                      </a>
                      @endcan
                      @can('repviajes.destroy')
                        {!! Form::open(['route' => ['repviajes.destroy', $repviaje1->id],
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
              {{ $repviajes1->render() }}
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
                    <th>Cliente</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Estado</th>
                    <th>Unidad</th>
                    <th>Camión</th>
                    <th>Proveedor</th>
                    <th>Referencia</th>
                    <th>Status</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($repviajes2 as $repviaje2)
                  <tr>
                    <td>{{ $repviaje2->cliente }}</td>
                    <td>{{ $repviaje2->origen }}</td>
                    <td>{{ $repviaje2->destino }}</td>
                    <td>{{ $repviaje2->estado }}</td>
                    <td>{{ $repviaje2->unidad }}</td>
                    <td>{{ $repviaje2->camion }}</td>
                    <td>{{ $repviaje2->proveedor }}</td>
                    <td>{{ $repviaje2->referencia }}</td>
                    <td class="text-danger">
                    @if ( $repviaje2->status =='1')
                      Programado
                    @endif
                    @if ( $repviaje2->status =='2')
                      Proceso
                    @endif
                    @if ( $repviaje2->status =='3')
                      Concluido
                    @endif
                    @if ( $repviaje2->status =='4')
                      Cancelado
                    @endif
                    </td>
                    <td>
                      <div class="btn-group">
                      @can('repviajes.show')
                      <a href="{{ route('repviajes.show', $repviaje2->id) }}"
                      class="btn btn-cescorp">
                       Ver
                      </a>
                      @endcan
                      @can('repviajes.edit')
                      <a href="{{ route('repviajes.edit', $repviaje2->id) }}"
                      class="btn btn-cescorp">
                        <i class="fa fa-lg fa-pencil" ></i>
                      </a>
                      @endcan
                      @can('repviajes.destroy')
                        {!! Form::open(['route' => ['repviajes.destroy', $repviaje2->id],
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
              {{ $repviajes2->render() }}
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
