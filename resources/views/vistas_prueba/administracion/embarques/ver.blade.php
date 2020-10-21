@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="row">
        <div class="col-md-6">
           <h3 class="tile-title">EMBARQUES</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <br>
          <h6>O.C.</h6>
          <label class="text-muted">1903005</label>
          <h6><th>CLIENTE</th></h6>
          <label class="text-muted">JOSE LUIS</label>
          <h6>ID EMBARQUE</h6>
          <label class="text-muted">CESCORP2019001</label>
        </div>
        <div class="col-md-3">
          <br>
          <h5>FACTURA CES&CO</h5>
          <br>
          <h6>FOLIO</h6>
          <label class="text-muted">A12</label>
          <h6>CANTIDAD</h6>
          <label class="text-muted">MX$53,200</label>
          <h6>FECHA</h6>
          <label class="text-muted">6/03/2019</label>
        </div>
        <div class="col-md-3">
          <br>
          <h5>TRANSPORTISTA</h5>
          <br>
          <h6>NOMBRE</h6>
          <label class="text-muted">ALFREDO</label>
          <h6>FOLIO</h6>
          <label class="text-muted">1499</label>
          <h6>CANTIDAD</h6>
          <label class="text-muted">MX$2,464</label>
          <h6>FECHA</h6>
          <label class="text-muted">19/03/2019</label>
          <h6>REP</h6>
          <label class="text-muted">1502</label>
        </div>
        <div class="col-md-3">
          <br>
          <h5>PAGO CLIENTE</h5>
          <br>
          <h6>CANTIDAD</h6>
          <label class="text-muted">MX$53,200</label>
          <h6>FECHA</h6>
          <label class="text-muted">22/03/2019</label>
          <h6>REP</h6>
          <label class="text-muted">A35</label>
        </div>
        <div class="col-md-3">
          <br>
          <h5>PAGO TRANSPORTISTA</h5>
          <br>
          <h6>CANTIDAD</h6>
          <label class="text-muted">MX$21,504</label>
          <h6>FECHA</h6>
          <label class="text-muted">19/03/2019</label>
        </div>
        <div class="col-md-3">
          <br>
          <h5>PROFIT</h5>
          <br>
          <h4><label class="text-muted">MX8,176.00</label></h4>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
