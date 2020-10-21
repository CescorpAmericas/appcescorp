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
           <h3 class="tile-title">Posibles clientes</h3>
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
                <th>EJECUTIVO</th>
                <th>CONTACTO</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
                <th>DOCUMENTACIÓN</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Phiten</td>
                <td>Valeria</td>
                <td>Cristina de Luna</td>
                <td>8120224493</td>
                <td>cristina.deluna@phiten.com.mx</td>
                <td>Incompleta</td>
                <td>
                  <div class="btn-group">
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
              <tr>
                <td>Phiten</td>
                <td>Valeria</td>
                <td>Cristina de Luna</td>
                <td>8120224493</td>
                <td>cristina.deluna@phiten.com.mx</td>
                <td>Completa</td>
                <td>
                  <div class="btn-group">
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
