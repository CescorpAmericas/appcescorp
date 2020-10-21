@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Facturas emitidas</h3>
      <div class="tile-body">
        <form>
          <div class="form-group">
            <label class="control-label">Cliente</label>
            <input class="form-control" type="text" placeholder="Ingrese cliente">
          </div>
          <div class="form-group">
            <label class="control-label">Factura</label>
            <input class="form-control" type="email" placeholder="Ingrese factura">
          </div>
          <div class="form-group">
            <label class="control-label">Razón social</label>
            <input class="form-control" type="text" placeholder="Ingrese razón social">
          </div>
          <div class="form-group">
            <label class="control-label">Total facturado</label> <br>
            <label class="control-label">$</label>
          </div>
          <div class="form-group">
            <label class="control-label">Subtotal</label>
            <input class="form-control" type="text" placeholder="Ingrese Subtotal">
          </div>
          <div class="form-group">
            <label class="control-label">Iva total</label>
            <input class="form-control" type="text" placeholder="Ingrese Iva total">
          </div>
          <div class="form-group">
            <label class="control-label">Iva retenido</label>
            <input class="form-control" type="text" placeholder="Ingrese Iva retenido">
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
