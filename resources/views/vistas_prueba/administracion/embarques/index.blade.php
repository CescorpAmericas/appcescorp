@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <a href=""><button class="btn btn-primary" type="button">Agregar</button></a>
  </div>
  <ul class="app-breadcrumb breadcrumb">
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="row">
        <div class="col-md-6">
           <h3 class="tile-title">EMBARQUES</h3>
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
                <th>CLIENTE</th>
                <th>FOLIO FACTURA CES&CO</th>
                <th>NOMBRE TRANSPORTISTA</th>
                <th>FOLIO TRANSPORTISTA</th>
                <th>PROFIT</th>
                <th>FECHA</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CESCORP2019001</td>
                <td>JOSE LUIS</td>
                <td>A12</td>
                <td>ALFREDO</td>
                <td>1499</td>
                <td>MX8,176.00</td>
                <td>15/03/2019</td>
                <td><a href="/embarques-ver"><button class="btn btn-primary" type="button">Ver</button></a></td>
                <td><button class="btn btn-primary" type="button">Editar</button></td>
              </tr>
              <tr>
                <td>CESCORP2019001</td>
                <td>JOSE LUIS</td>
                <td>A12</td>
                <td>ALFREDO</td>
                <td>1499</td>
                <td>MX8,176.00</td>
                <td>15/03/2019</td>
                <td><a href="/embarques-ver"><button class="btn btn-primary" type="button">Ver</button></a></td>
                <td><button class="btn btn-primary" type="button">Editar</button></td>
              </tr>
              <tr>
                <td>CESCORP2019001</td>
                <td>JOSE LUIS</td>
                <td>A12</td>
                <td>ALFREDO</td>
                <td>1499</td>
                <td>MX8,176.00</td>
                <td>15/03/2019</td>
                <td><a href="/embarques-ver"><button class="btn btn-primary" type="button">Ver</button></a></td>
                <td><button class="btn btn-primary" type="button">Editar</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection
