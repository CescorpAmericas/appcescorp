@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="">
      <div class="row">
        <div class="col-md-12">
           <h3 class="tile-title">BALANCE</h3>
        </div>
        <div class="col-md-6 col-lg-3">
          <br>
          <br>
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-calendar fa-3x"></i>
            <div class="info">
              <h4 class="text-muted">Meta Febrero</h4>
              <h2>10 %</h2>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <br>
          <div class="tile">
            <h5 class="text-muted">TOTAL FACTURADO ENERO</h5>
            <div class="tile-body">MX$30,000</div>
            <div class="tile-footer">
              <h5 class="text-muted">FACTURADO + POR FACTURAR</h5>
              <div class="tile-body">MX$00,000</div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <br>
          <div class="tile">
            <h5 class="text-muted">SUBTOTAL FACTURADO ENERO</h5>
            <div class="tile-body">MX$00,000</div>
            <div class="tile-footer">
              <h5 class="text-muted">PROFIT</h5>
              <div class="tile-body">MX$00,000</div>
            </div>
            <div class="tile-footer">
              <h5 class="text-muted">PROFIT DESPUES DE IMPUESTOS</h5>
              <div class="tile-body">MX$00,000</div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <br>
          <div class="tile">
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>SALDO</th>
                      <th>-MX$5,380.27</th>
                    </tr>
                  </thead>
                  <thead>
                    <tr>
                      <th>POR COBRAR</th>
                      <th>MX$888,344</th>
                    </tr>
                  </thead>
                  <thead>
                    <tr>
                      <th>POR PAGAR</th>
                      <th>MX$711,372</th>
                    </tr>
                  </thead>
                  <thead>
                    <tr>
                      <th>POR FACTURAR</th>
                      <th>MX$57,075.20</th>
                    </tr>
                  </thead>
                </table>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <br>
          <div class="tile">
            <h5>POR PAGAR</h5>
            <br>
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>CLIENTES</th>
                      <th>FOLIO</th>
                      <th>CANTIDAD</th>
                      <th>VENCIMIENTO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>CARGA EXPRESS</td>
                      <td>4282</td>
                      <td>MX$64,960</td>
                      <td>4/01/2019</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>211FAST</td>
                      <td>653</td>
                      <td>MX$8,816</td>
                      <td>10/01/2020</td>
                    </tr>
                    <tr>
                      <td>CARGA EXPRESS</td>
                      <td>4282</td>
                      <td>MX$64,960</td>
                      <td>4/01/2019</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>211FAST</td>
                      <td>653</td>
                      <td>MX$8,816</td>
                      <td>10/01/2020</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
        <div class="col-md-3">
          <br>
          <div class="tile">
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>POR COBRAR</th>
                      <th>FACTURADO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>BUNGER</td>
                      <td>MX$45,240.00</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>SAUER</td>
                      <td>MX$21,280.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tile-footer">
                <h5 class="text-muted">TOTAL</h5>
                <div class="tile-body">MX$00,000</div>
              </div>
          </div>
        </div>
        <div class="col-md-3">
          <br>
          <div class="tile">
            <h5>POR FACTURAR CLIENTES</h5>
            <br>
            <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>HELLMANN-KIA</td>
                      <td>MX$4,256.00</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>MOV LOCAL LDO TX</td>
                      <td>MX$4,043.00</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>HELLMANN-KIA</td>
                      <td>MX$4,256.00</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>MOV LOCAL LDO TX</td>
                      <td>MX$4,043.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tile-footer">
                <h5 class="text-muted">TOTAL</h5>
                <div class="tile-body">MX$00,000</div>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <br>
          <div class="tile">
            <h5>POR PAGAR EN DOLARES</h5>
            <br>
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>CLIENTES</th>
                      <th>FOLIO</th>
                      <th>CANTIDAD</th>
                      <th>VENCIMIENTO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>CARGA EXPRESS</td>
                      <td>4282</td>
                      <td>$64,960</td>
                      <td>4/01/2019</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>211FAST</td>
                      <td>653</td>
                      <td>$8,816</td>
                      <td>10/01/2020</td>
                    </tr>
                    <tr>
                      <td>CARGA EXPRESS</td>
                      <td>4282</td>
                      <td>64,960</td>
                      <td>4/01/2019</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>211FAST</td>
                      <td>653</td>
                      <td>8,816</td>
                      <td>10/01/2020</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
        <div class="col-md-3">
          <br>
          <div class="tile">
            <br>
            <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>TOTAL DOLARES</td>
                      <td>MX$000,000.00</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>A TIPO DE CAMBIO DE $19 MX</td>
                      <td>MX$00,000.00</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>GENERAL TOTAL</td>
                      <td>MX$000,000.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
