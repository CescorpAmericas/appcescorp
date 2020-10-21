@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>

    <h3 class="tile-title">Facturas recibidas</h3>
  </div>
  <ul class="app-breadcrumb breadcrumb">
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">


      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pendientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pagadas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sin factura pendientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#SinFactPag" role="tab" aria-controls="contact" aria-selected="false">Sin factura pagadas</a>
        </li>
        <li class="nav-item">
            <a href="/fact_recibidas_create"><button class="btn btn-primary" type="button">Agregar</button></a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <br>
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
            <br>
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Empresa</th>
                    <th>Folio</th>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Iva retenido</th>
                    <th>Total</th>
                    <th>Fecha factura</th>
                    <th>Vencimiento</th>
                    <th>Fecha pago</th>
                    <th>Cantidad</th>
                    <th>Banco</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>KSO</td>
                    <td>2958</td>
                    <td>mx$21500</td>
                    <td>MX$1720</td>
                    <td>MX$860</td>
                    <td>MX$22360</td>
                    <td>5/01/2020</td>
                    <td class="text-danger">28/01/2020</td>
                    <td>Pendiente</td>
                    <td>Pendiente</td>

                    <td>Sn</td>
                    <td><button class="btn btn-primary" type="button">Editar</button></td>
                  </tr>
                  <tr>
                    <td>SANTA FE</td>
                    <td>1060</td>
                    <td>1034 USD</td>
                    <td>MX$0.00</td>
                    <td>MX$0.00</td>
                    <td>1034 USD</td>
                    <td>5/01/2020</td>
                    <td class="text-danger">22/01/2020</td>
                    <td>Pendiente</td>
                    <td>Pendiente</td>
                    <td>Sn</td>
                    <td><button class="btn btn-primary" type="button">Editar</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <br>
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
            <br>
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Empresa</th>
                    <th>Folio</th>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Iva retenido</th>
                    <th>Total</th>
                    <th>Fecha factura</th>
                    <th>Vencimiento</th>
                    <th>Fecha pago</th>
                    <th>Cantidad</th>
                    <th>Banco</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>KSO</td>
                    <td>2958</td>
                    <td>mx$21500</td>
                    <td>MX$1720</td>
                    <td>MX$860</td>
                    <td>MX$22360</td>
                    <td>5/01/2020</td>
                    <td class="text-success">28/01/2020</td>
                    <td>28/01/2020</td>
                    <td>MX$22360</td>

                    <td>Sn</td>
                    <td><button class="btn btn-primary" type="button">Editar</button></td>
                  </tr>
                  <tr>
                    <td>SANTA FE</td>
                    <td>1060</td>
                    <td>1034 USD</td>
                    <td>MX$0.00</td>
                    <td>MX$0.00</td>
                    <td>1034 USD</td>
                    <td>5/01/2020</td>
                    <td class="text-success">22/01/2020</td>
                    <td>22/01/2020</td>
                    <td>MX$22360</td>
                    <td>Sn</td>
                    <td><button class="btn btn-primary" type="button">Editar</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <br>
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
            <br>
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Empresa</th>
                    <th>Folio</th>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Iva retenido</th>
                    <th>Total</th>
                    <th>Fecha factura</th>
                    <th>Vencimiento</th>
                    <th>Fecha pago</th>
                    <th>Cantidad</th>
                    <th>Banco</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>KSO</td>
                    <td>0</td>
                    <td>S/N</td>
                    <td>S/N</td>
                    <td>S/N</td>
                    <td>MX$22360</td>
                    <td>5/01/2020</td>
                    <td class="text-danger">28/01/2020</td>
                    <td>Pendiente</td>
                    <td>Pendiente</td>

                    <td>Sn</td>
                    <td><button class="btn btn-primary" type="button">Editar</button></td>
                  </tr>
                  <tr>
                    <td>SANTA FE</td>
                    <td>0</td>
                    <td>S/N</td>
                    <td>S/N</td>
                    <td>S/N</td>
                    <td>1034 USD</td>
                    <td>5/01/2020</td>
                    <td class="text-danger">22/01/2020</td>
                    <td>Pendiente</td>
                    <td>Pendiente</td>
                    <td>Sn</td>
                    <td><button class="btn btn-primary" type="button">Editar</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="tab-pane fade" id="SinFactPag" role="tabpanel" aria-labelledby="contact-tab">
          <br>
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
            <br>
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Empresa</th>
                    <th>Folio</th>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Iva retenido</th>
                    <th>Total</th>
                    <th>Fecha factura</th>
                    <th>Vencimiento</th>
                    <th>Fecha pago</th>
                    <th>Cantidad</th>
                    <th>Banco</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>KSO</td>
                    <td>0</td>
                    <td>S/N</td>
                    <td>S/N</td>
                    <td>S/N</td>
                    <td>MX$22360</td>
                    <td>5/01/2020</td>
                    <td class="text-success">28/01/2020</td>
                    <td>28/01/2020</td>
                    <td>MX$22360</td>
                    <td>Sn</td>
                    <td><button class="btn btn-primary" type="button">Editar</button></td>
                  </tr>
                  <tr>
                    <td>SANTA FE</td>
                    <td>0</td>
                    <td>S/N</td>
                    <td>S/N</td>
                    <td>S/N</td>
                    <td>1034 USD</td>
                    <td>5/01/2020</td>
                    <td class="text-success">22/01/2020</td>
                    <td>22/01/2020</td>
                    <td>1034 USD</td>
                    <td>Sn</td>
                    <td><button class="btn btn-primary" type="button">Editar</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
