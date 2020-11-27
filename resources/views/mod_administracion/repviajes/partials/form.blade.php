<div class="col-lg-12">
  <div class="widget-small gris"><i class="icon fa fa-files-o fa-3x"></i>
    <div class="info">
      <h4>Datos del Viaje</h4>
    </div>
  </div>
</div>
<div class="form-group col-md-3">
  {{ Form::label('cliente', 'Nombre del cliente') }}
  {{ Form::text('cliente', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'cliente']) }}
  @if ($errors->has('cliente'))
      <small class="form-text text-danger">{{ $errors->first('cliente') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('origen', 'Origen') }}
  {{ Form::text('origen', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'origen']) }}
  @if ($errors->has('origen'))
      <small class="form-text text-danger">{{ $errors->first('origen') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('destino', 'Destino') }}
  {{ Form::text('destino', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'destino']) }}
  @if ($errors->has('destino'))
      <small class="form-text text-danger">{{ $errors->first('destino') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('estado', 'Estado') }}
  {{ Form::text('estado', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'estado']) }}
  @if ($errors->has('estado'))
      <small class="form-text text-danger">{{ $errors->first('estado') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('unidad', 'Unidad') }}
  {{ Form::text('unidad', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'unidad']) }}
  @if ($errors->has('unidad'))
      <small class="form-text text-danger">{{ $errors->first('unidad') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('camion', 'Camión') }}
  {{ Form::text('camion', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'camion']) }}
  @if ($errors->has('camion'))
      <small class="form-text text-danger">{{ $errors->first('camion') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('proveedor', 'Proveedor') }}
  {{ Form::text('proveedor', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'proveedor']) }}
  @if ($errors->has('proveedor'))
      <small class="form-text text-danger">{{ $errors->first('proveedor') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('referencia', 'Referencia') }}
  {{ Form::text('referencia', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'referencia']) }}
  @if ($errors->has('referencia'))
      <small class="form-text text-danger">{{ $errors->first('referencia') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('tipo_carga', 'Tipo de carga') }}
  {{ Form::text('tipo_carga', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'tipo_carga']) }}
  @if ($errors->has('tipo_carga'))
      <small class="form-text text-danger">{{ $errors->first('tipo_carga') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('tipo_viaje', 'Tipo de viaje') }}
  {{ Form::text('tipo_viaje', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'tipo_viaje']) }}
  @if ($errors->has('tipo_viaje'))
      <small class="form-text text-danger">{{ $errors->first('tipo_viaje') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('zona_cruce', 'Zona de cruce') }}
  {{ Form::text('zona_cruce', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'zona_cruce']) }}
  @if ($errors->has('zona_cruce'))
      <small class="form-text text-danger">{{ $errors->first('zona_cruce') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('fecha_carga', 'Fecha de carga') }}
  {{ Form::text('fecha_carga', null, ['class'=> 'form-control', 'id'=>'demoDate9', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-2">
  {{ Form::label('hora_carga', 'Hora de carga') }}
  <!--<input type="time" name="hora_carga" id = "hora_carga" class="form-control required">-->
  {{ Form::text('hora_carga', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'hora_carga']) }}
  @if ($errors->has('hora_carga'))
      <small class="form-text text-danger">{{ $errors->first('hora_carga') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('fecha_descarga', 'Fecha de descarga') }}
  {{ Form::text('fecha_descarga', null, ['class'=> 'form-control', 'id'=>'demoDate10', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-2">
  {{ Form::label('hora_entrega', 'Hora de entrega') }}
  {{ Form::text('hora_entrega', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'hora_entrega']) }}
  @if ($errors->has('hora_entrega'))
      <small class="form-text text-danger">{{ $errors->first('hora_entrega') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('status', 'Status') }}
  {{ Form::select('status',['1'=>'Programado','2'=>'Proceso','3'=>'Concluido','4'=>'Cancelado'], null, ['class'=> 'form-control','required' => 'required ', 'id'=>'status']) }}
  @if ($errors->has('status'))
      <small class="form-text text-danger">{{ $errors->first('status') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('efectividad_viaje', 'Efectividad de viaje') }}
  {{ Form::select('efectividad_viaje',['Bien'=>'Bien','Regular'=>'Regular','Mal'=>'Mal'], null, ['class'=> 'form-control','required' => 'required ', 'id'=>'efectividad_viaje']) }}
  @if ($errors->has('efectividad_viaje'))
      <small class="form-text text-danger">{{ $errors->first('efectividad_viaje') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('comentario', 'Comentario') }}
  {{ Form::textarea('comentario', null, ['class'=> 'form-control','rows'=>"5", 'required' => 'required ', 'id'=>'comentario']) }}
  @if ($errors->has('comentario'))
      <small class="form-text text-danger">{{ $errors->first('comentario') }}</small>
  @endif
</div>
<div class="col-lg-12">
  <div class="widget-small warning coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
    <div class="info">
      <h4>Costos del viaje</h4>
    </div>
  </div>
</div>
<div class="form-group col-md-3">
  {{ Form::label('po_o_ci', 'PO o CI') }}
  {{ Form::text('po_o_ci', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'po_o_ci']) }}
  @if ($errors->has('po_o_ci'))
      <small class="form-text text-danger">{{ $errors->first('po_o_ci') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('flete', 'Flete') }}
  {{ Form::text('flete', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'flete']) }}
  @if ($errors->has('flete'))
      <small class="form-text text-danger">{{ $errors->first('flete') }}</small>
  @endif
</div>
<div class="col-lg-12">
  <div class="widget-small warning coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
    <div class="info">
      <h4>Costos adicionales</h4>
    </div>
  </div>
</div>
<div class="form-group col-md-3">
  {{ Form::label('moviento_falso', 'Movimiento en falso') }}
  {{ Form::text('moviento_falso', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'moviento_falso']) }}
  @if ($errors->has('moviento_falso'))
      <small class="form-text text-danger">{{ $errors->first('moviento_falso') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('transbordo', 'Transbordo') }}
  {{ Form::text('transbordo', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'transbordo']) }}
  @if ($errors->has('transbordo'))
      <small class="form-text text-danger">{{ $errors->first('transbordo') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('maniobras_descarga', 'Maniobra de descarga') }}
  {{ Form::text('maniobras_descarga', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'maniobras_descarga']) }}
  @if ($errors->has('maniobras_descarga'))
      <small class="form-text text-danger">{{ $errors->first('maniobras_descarga') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('sobrepeso', 'Sobrepeso') }}
  {{ Form::text('sobrepeso', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'sobrepeso']) }}
  @if ($errors->has('sobrepeso'))
      <small class="form-text text-danger">{{ $errors->first('sobrepeso') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('estadias', 'EstadÍas') }}
  {{ Form::text('estadias', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'estadias']) }}
  @if ($errors->has('estadias'))
      <small class="form-text text-danger">{{ $errors->first('estadias') }}</small>
  @endif
</div>
<div class="form-group col-md-3">
  {{ Form::label('seguro', 'Seguro') }}
  {{ Form::text('seguro', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'seguro']) }}
  @if ($errors->has('seguro'))
      <small class="form-text text-danger">{{ $errors->first('seguro') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('moneda', 'Moneda') }}
  {{ Form::select('moneda',['MXN'=>'MXN','USD'=>'USD','EUR'=>'EUR','CAD'=>'CAD','JPY'=>'JPY','AUD'=>'AUD','CNY'=>'CNY','NZD'=>'NZD'], null, ['class'=> 'form-control','required' => 'required ', 'id'=>'moneda']) }}
  @if ($errors->has('moneda'))
      <small class="form-text text-danger">{{ $errors->first('moneda') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('cruce', 'Cruce') }}
  {{ Form::text('cruce', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'cruce']) }}
  @if ($errors->has('cruce'))
      <small class="form-text text-danger">{{ $errors->first('cruce') }}</small>
  @endif
</div>
<div class="form-group col-md-2">
  {{ Form::label('demoras', 'Demoras') }}
  {{ Form::text('demoras', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'demoras']) }}
  @if ($errors->has('demoras'))
      <small class="form-text text-danger">{{ $errors->first('demoras') }}</small>
  @endif
</div>
<!--<div class="col-lg-12">
  <div class="widget-small warning coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
    <div class="info">
      <h4>Costo final</h4>
    </div>
  </div>
</div>-->
<!--<div class="form-group col-md-2">
  {{ Form::label('subtotal', 'Subtotal') }}
  {{ Form::text('subtotal', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'subtotal']) }}
  @if ($errors->has('subtotal'))
      <small class="form-text text-danger">{{ $errors->first('subtotal') }}</small>
  @endif
</div>-->
<!--<div class="form-group col-md-2">
  {{ Form::label('iva', 'IVA 16%') }}
  {{ Form::text('iva', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'iva']) }}
  @if ($errors->has('iva'))
      <small class="form-text text-danger">{{ $errors->first('iva') }}</small>
  @endif
</div>-->
<!--<div class="form-group col-md-2">
  {{ Form::label('ret', 'RET 4%') }}
  {{ Form::text('ret', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'ret']) }}
  @if ($errors->has('ret'))
      <small class="form-text text-danger">{{ $errors->first('ret') }}</small>
  @endif
</div>-->
<!--<div class="form-group col-md-3">
  {{ Form::label('total', 'Total') }}
  {{ Form::text('total', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'total']) }}
  @if ($errors->has('total'))
      <small class="form-text text-danger">{{ $errors->first('total') }}</small>
  @endif
</div>-->
<div class="tile-footer col-md-12">
{{ Form::submit('Guardar', ['class'=> 'btn btn-sm btn-primary']) }}
</div>
