
@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text"></i></h1>
  </div>
  <div>
    <a href=""><button class="btn btn-primary" type="button">Crear</button></a>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Prospectos</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Posibles clientes</a>
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
          <!--Tabla responsiva-->
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>EMPRESA</th>
                    <th>EJECUTIVO</th>
                    <th>YA SE CONTACTO</th>
                    <th>FECHA CONTACTO</th>
                    <th>CONTACTO</th>
                    <th>TELEFONO</th>
                    <th>CORREO</th>
                    <th>COMENTARIOS</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Phiten</td>
                    <td>Valeria</td>
                    <td>Se contacto</td>
                    <td>27/5/2020</td>
                    <td>Cristina de Luna</td>
                    <td>8120224493</td>
                    <td>cristina.deluna@phiten.com.mx</td>
                    <td>No tiene mucho interés en trabajar con otros proveedores, seguiremos empujando. </td>
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
            <!--Tabla responsiva-->
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>EMPRESA</th>
                      <th>EJECUTIVO</th>
                      <th>YA SE CONTACTO</th>
                      <th>FECHA CONTACTO</th>
                      <th>CONTACTO</th>
                      <th>TELEFONO</th>
                      <th>CORREO</th>
                      <th>COMENTARIOS</th>
                      <th colspan="3">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Phiten</td>
                      <td>Valeria</td>
                      <td>Se contacto</td>
                      <td>27/5/2020</td>
                      <td>Cristina de Luna</td>
                      <td>8120224493</td>
                      <td>cristina.deluna@phiten.com.mx</td>
                      <td>No tiene mucho interés en trabajar con otros proveedores, seguiremos empujando. </td>
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
        <!--<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>-->
      </div>
    </div>
  </div>
</div>
@endsection
