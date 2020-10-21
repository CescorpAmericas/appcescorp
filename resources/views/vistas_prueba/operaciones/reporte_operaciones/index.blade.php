@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text"></i> REPORTE OPERACIONES</h1>
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
                <th>NO. VIAJE</th>
                <th>CLIENTE</th>
                <th>FECHA</th>
                <th>ORIGEN</th>
                <th>DESTINO</th>
                <th>TRANSPORTE</th>
                <th>STATUS</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>METGO</td>
                <td>06/02/2020</td>
                <td>GPE</td>
                <td>QUERETARO</td>
                <td>URIEL</td>
                <td>PENDIENTE</td>
                <td>
                  <div class="btn-group">
                    <a href="/reporte_operaciones_ver"
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
              <tr>
                <td>1</td>
                <td>METGO</td>
                <td>06/02/2020</td>
                <td>GPE</td>
                <td>QUERETARO</td>
                <td>URIEL</td>
                <td>PENDIENTE</td>
                <td>
                  <div class="btn-group">
                    <a href="/reporte_operaciones_ver"
                    class="btn btn-cescorp">
                      Ver
                    </a>
                  <a href=""
                  class="btn btn-cescorp">
                    <i class="fa fa-lg fa-pencil" ></i>
                  </a>
                        <button href="#" class="btn btn-danger">
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
