@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-truck"></i> EMBARQUES TERRESTRES</h1>
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
                <th>ID EMBARQUE</th>
                <th>OC</th>
                <th>FECHA FACTURA</th>
                <th>SUBTOTAL</th>
                <th>IVA 16 %</th>
                <th>RETENIDO 4%</th>
                <th>TOTAL PROVEEDOR</th>
                <th>UTILIDAD</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CESCORP2019148</td>
                <td>1912020</td>
                <td>06/02/2020</td>
                <td>$21,630.40</td>
                <td>$3,460.86</td>
                <td>$865.22</td>
                <td>$24,226.05</td>
                <td>$11,469.47</td>
                <td>
                  <div class="btn-group">
                    <a href="/embarque_terrestre_ver"
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
                <td>CESCORP2019148</td>
                <td>1912020</td>
                <td>06/02/2020</td>
                <td>$21,630.40</td>
                <td>$3,460.86</td>
                <td>$865.22</td>
                <td>$24,226.05</td>
                <td>$11,469.47</td>
                <td>
                  <div class="btn-group">
                    <a href="/embarque_terrestre_ver"
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
