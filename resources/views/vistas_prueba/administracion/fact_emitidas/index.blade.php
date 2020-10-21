@extends('layouts.app')

@section('content')
      <div class="app-title">
        <div class="row">
          <div class="col-md-12">
            <h3 class="tile-title">FACTURAS EMITIDAS</h3>
          </div>
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
                <a class="justify-content-end" href="/fact_emitidas_create"><button class="btn btn-primary pull-right" type="button">Agregar</button></a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <br>
                <div class="row">
                  <div class="col-md-6">
                     <h3 class="tile-title"></h3>
                  </div>
                  <div class="col-md-6">
                    <form class="form-inline my-2 my-lg-0 justify-content-end">
                      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Cliente</th>
                          <th>Factura</th>
                          <th>Razón social</th>
                          <th>Total facturado</th>
                          <th>Subtotal</th>
                          <th>Iva total</th>
                          <th>Iva retenido</th>
                          <th>Fecha</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>HM</td>
                          <td>A903</td>
                          <td>HELLMANN</td>
                          <td>MX$4,043</td>
                          <td>MX$3,610</td>
                          <td>30.4 USD</td>
                          <td>MX$144.40</td>
                          <td>15/01/2020</td>
                          <td>Activo</td>
                          <td><button class="btn btn-primary" type="button">Editar</button></td>
                        </tr>
                        <tr>
                          <td>JL</td>
                          <td>A905</td>
                          <td>JOSE LUIS RAMIREZ</td>
                          <td>MX$8,236</td>
                          <td>MX$7,100</td>
                          <td>MX$1,136</td>
                          <td>SN</td>
                          <td>15/01/2020</td>
                          <td>Activo</td>
                          <td><button class="btn btn-primary" type="button">Editar</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <br>
                <div class="row">
                  <div class="col-md-6">
                     <h3 class="tile-title"></h3>
                  </div>
                  <div class="col-md-6">
                    <form class="form-inline my-2 my-lg-0 justify-content-end">
                      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Cliente</th>
                          <th>Factura</th>
                          <th>Razón social</th>
                          <th>Total facturado</th>
                          <th>Subtotal</th>
                          <th>Iva total</th>
                          <th>Iva retenido</th>
                          <th>Fecha</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>HM</td>
                          <td>A903</td>
                          <td>HELLMANN</td>
                          <td>MX$4,043</td>
                          <td>MX$3,610</td>
                          <td>30.4 USD</td>
                          <td>MX$144.40</td>
                          <td>15/01/2020</td>
                          <td>Cancelado</td>
                          <td><button class="btn btn-danger" type="button">Editar</button></td>
                        </tr>
                        <tr>
                          <td>JL</td>
                          <td>A905</td>
                          <td>JOSE LUIS RAMIREZ</td>
                          <td>MX$8,236</td>
                          <td>MX$7,100</td>
                          <td>MX$1,136</td>
                          <td>SN</td>
                          <td>15/01/2020</td>
                          <td>Cancelado</td>
                          <td><button class="btn btn-danger" type="button">Editar</button></td>
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
