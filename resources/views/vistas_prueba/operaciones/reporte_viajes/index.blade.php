@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text-o"></i> REPORTE VIAJES</h1>
  </div>
  <div>
    @can('factemitidas.create')
    <a href=""><button class="btn btn-primary" type="button">Crear</button></a>
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
              <tr>
                <td>Hellmann MTY</td>
                <td>Laredo tx.</td>
                <td>Altamira</td>
                <td>Tamaulipas</td>
                <td>Caja seca</td>
                <td>Camión 3.5</td>
                <td>Seoane</td>
                <td>CESCORP2020-244</td>
                <td>Concluido</td>

                <td>
                  <div class="btn-group">
                    <a href="/reporte_viajes_ver"
                    class="btn btn-cescorp">
                      Ver
                    </a>
                  <a href=""
                  class="btn btn-cescorp">
                    <i class="fa fa-lg fa-pencil" ></i>
                  </a>
                        <button href="/reporte_operaciones_ver" class="btn btn-danger">
                          <i class="fa fa-lg fa-trash"></i>
                        </button>
                   </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection
