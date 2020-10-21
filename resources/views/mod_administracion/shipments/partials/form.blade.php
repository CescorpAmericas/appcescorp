

<div class="form-group col-md-2">
  {{ Form::label('O_C', 'O C') }}
  {{ Form::text('O_C', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'O_C']) }}
  @if ($errors->has('O_C'))
      <small class="form-text text-danger">{{ $errors->first('O_C') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('CLIENTE', 'Nombre del cliente') }}
  {{ Form::text('CLIENTE', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'CLIENTE']) }}
  @if ($errors->has('CLIENTE'))
      <small class="form-text text-danger">{{ $errors->first('CLIENTE') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('ID_EMBARQUE', 'ID Embarque') }}
  {{ Form::text('ID_EMBARQUE', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'ID_EMBARQUE']) }}
  @if ($errors->has('ID_EMBARQUE'))
      <small class="form-text text-danger">{{ $errors->first('ID_EMBARQUE') }}</small>
  @endif
</div>
<div class="form-group col-md-12">
  <h4>FACTURA CESCORP</h4>
</div>
<div class="form-group col-md-3">
  {{ Form::label('FOLIO_FACT_CESCORP', 'Folio') }}
  {{ Form::text('FOLIO_FACT_CESCORP', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'FOLIO_FACT_CESCORP']) }}
  @if ($errors->has('FOLIO_FACT_CESCORP'))
      <small class="form-text text-danger">{{ $errors->first('FOLIO_FACT_CESCORP') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('CANTIDAD_FACT_CESCORP', 'Cantidad') }}
  {{ Form::text('CANTIDAD_FACT_CESCORP', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'CANTIDAD_FACT_CESCORP']) }}
  @if ($errors->has('CANTIDAD_FACT_CESCORP'))
      <small class="form-text text-danger">{{ $errors->first('CANTIDAD_FACT_CESCORP') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('FECHA_FACT_CESCORP', 'Fecha') }}
  {{ Form::text('FECHA_FACT_CESCORP', null, ['class'=> 'form-control', 'id'=>'demoDate1', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-12">
  <h4>TRANSPORTISTA</h4>
</div>
<div class="form-group col-md-3">
  {{ Form::label('NOMBRE_TRANSP', 'Nombre') }}
  {{ Form::text('NOMBRE_TRANSP', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'NOMBRE_TRANSP']) }}
  @if ($errors->has('NOMBRE_TRANSP'))
      <small class="form-text text-danger">{{ $errors->first('NOMBRE_TRANSP') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('FOLIO_TRANSP', 'Folio') }}
  {{ Form::text('FOLIO_TRANSP', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'FOLIO_TRANSP']) }}
  @if ($errors->has('FOLIO_TRANSP'))
      <small class="form-text text-danger">{{ $errors->first('FOLIO_TRANSP') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('CANTIDAD_TRANSP', 'Cantidad') }}
  {{ Form::text('CANTIDAD_TRANSP', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'CANTIDAD_TRANSP']) }}
  @if ($errors->has('CANTIDAD_TRANSP'))
      <small class="form-text text-danger">{{ $errors->first('CANTIDAD_TRANSP') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('FECHA_TRANSP', 'Fecha') }}
  {{ Form::text('FECHA_TRANSP', null, ['class'=> 'form-control', 'id'=>'demoDate2', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-2">
  {{ Form::label('REP_TRANSP', 'REP ') }}
  {{ Form::text('REP_TRANSP', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'REP_TRANSP']) }}
  @if ($errors->has('REP_TRANSP'))
      <small class="form-text text-danger">{{ $errors->first('REP_TRANSP') }}</small>
  @endif
</div>
<div class="form-group col-md-12">
  <h4 class="tile-title ">PAGO CLIENTE</h4>
</div>
<div class="form-group col-md-3">
  {{ Form::label('CANTIDAD_PAGO_CLIENTE', 'Cantidad') }}
  {{ Form::text('CANTIDAD_PAGO_CLIENTE', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'CANTIDAD_PAGO_CLIENTE']) }}
  @if ($errors->has('CANTIDAD_PAGO_CLIENTE'))
      <small class="form-text text-danger">{{ $errors->first('CANTIDAD_PAGO_CLIENTE') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('FECHA_PAGO_CLIENTE', 'Fecha') }}
  {{ Form::text('FECHA_PAGO_CLIENTE', null, ['class'=> 'form-control', 'id'=>'demoDate3', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-2">
  {{ Form::label('REP_PAGO_CLIENTE', 'REP') }}
  {{ Form::text('REP_PAGO_CLIENTE', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'REP_PAGO_CLIENTE']) }}
  @if ($errors->has('REP_PAGO_CLIENTE'))
      <small class="form-text text-danger">{{ $errors->first('REP_PAGO_CLIENTE') }}</small>
  @endif
</div>
<div class="form-group col-md-12">
  <h4>PAGO TRANSPORTISTA</h4>
</div>
<div class="form-group col-md-3">
  {{ Form::label('CANTIDAD_PAGO_TRANSP', 'Cantidad') }}
  {{ Form::text('CANTIDAD_PAGO_TRANSP', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'CANTIDAD_PAGO_TRANSP']) }}
  @if ($errors->has('CANTIDAD_PAGO_TRANSP'))
      <small class="form-text text-danger">{{ $errors->first('CANTIDAD_PAGO_TRANSP') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('FECHA_PAGO_TRANSP', 'Fecha') }}
  {{ Form::text('FECHA_PAGO_TRANSP', null, ['class'=> 'form-control', 'id'=>'demoDate4', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-12">
  <h4>PROFIT</h4>
</div>
<div class="form-group col-md-2">
  {{ Form::text('PROFIT', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'PROFIT']) }}
  @if ($errors->has('PROFIT'))
      <small class="form-text text-danger">{{ $errors->first('PROFIT') }}</small>
  @endif
</div>
<div class="form-group col-md-12">
  {{ Form::submit('Guardar', ['class'=> 'btn btn-sm btn-primary']) }}
</div>
