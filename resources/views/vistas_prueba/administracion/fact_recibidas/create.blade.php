@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Facturas Recibidas</h3>
      <div class="tile-body">
        <form>
          <div class="form-group">
            <label class="control-label">Empresa</label>
            <input class="form-control" type="text" placeholder="Ingrese empresa">
          </div>
          <div class="form-group">
            <label class="control-label">Credito</label>
            <input class="form-control" type="email" placeholder="Ingrese días de plazo">
          </div>
          <div class="form-group">
            <label class="control-label">Folio</label>
            <input class="form-control" type="email" placeholder="Ingrese folio">
          </div>
          <div class="form-group">
            <label class="control-label">Subtotal</label>
            <input class="form-control" type="text" placeholder="Ingrese subtotal">
          </div>
          <div class="form-group">
            <label class="control-label">Iva</label>
            <input class="form-control" type="text" placeholder="Ingrese cantidad en IVA">
          </div>
          <div class="form-group">
            <label class="control-label">Iva retenido</label>
            <input class="form-control" type="text" placeholder="Ingrese IVA retenido">
          </div>
          <div class="form-group">
            <label class="control-label">Total</label><br>
            <label class="control-label">$</label>
          </div>
          <div class="form-group">
            <label class="control-label">Fecha factura</label>
            <input class="form-control" type="text" placeholder="d/m/a">
          </div>
          <div class="form-group">
            <label class="control-label">Fecha Pago</label>
            <input class="form-control" type="text" placeholder="d/m/a">
          </div>
          <!--<div class="form-group">
            <label class="control-label">Vencimiento</label>
            <input class="form-control" type="text" placeholder="Muestra la fecha de vecimiento">
          </div>-->
          <div class="form-group">
            <label class="control-label">Banco</label>
            <input class="form-control" type="text" placeholder="Ingrese Banco">
          </div>
        </form>
      </div>
      <div class="tile-footer">
        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
      </div>
    </div>
  </div>
</div>
@endsection
