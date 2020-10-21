

<div class="form-group col-md-4">
  {{ Form::label('EMPRESA', 'EMPRESA') }}
  {{ Form::text('EMPRESA', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'EMPRESA']) }}
  @if ($errors->has('EMPRESA'))
      <small class="form-text text-danger">{{ $errors->first('EMPRESA') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('FOLIO', 'FOLIO') }}
  {{ Form::text('FOLIO', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'FOLIO']) }}
  @if ($errors->has('FOLIO'))
      <small class="form-text text-danger">{{ $errors->first('FOLIO') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('SUBTOTAL', 'SUBTOTAL') }}
  {{ Form::text('SUBTOTAL', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'SUBTOTAL']) }}
  @if ($errors->has('SUBTOTAL'))
      <small class="form-text text-danger">{{ $errors->first('SUBTOTAL') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('IVA', 'IVA') }}
  {{ Form::text('IVA', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'IVA']) }}
  @if ($errors->has('IVA'))
      <small class="form-text text-danger">{{ $errors->first('IVA') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('IVA_RETENIDO', 'IVA RETENIDO') }}
  {{ Form::text('IVA_RETENIDO', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'IVA_RETENIDO']) }}
  @if ($errors->has('IVA_RETENIDO'))
      <small class="form-text text-danger">{{ $errors->first('IVA_RETENIDO') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('TOTAL', 'TOTAL') }}
  {{ Form::text('TOTAL', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'TOTAL']) }}
  @if ($errors->has('TOTAL'))
      <small class="form-text text-danger">{{ $errors->first('TOTAL') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('FECHA_FACTURA', 'FECHA FACTURA') }}
  {{ Form::text('FECHA_FACTURA', null, ['class'=> 'form-control', 'id'=>'demoDate5', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-4">
  {{ Form::label('VENCIMIENTO', 'VENCIMIENTO') }}
  {{ Form::text('VENCIMIENTO', null, ['class'=> 'form-control', 'id'=>'demoDate6', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-4">
  {{ Form::label('FECHA_PAGO', 'FECHA PAGO') }}
  {{ Form::text('FECHA_PAGO', null, ['class'=> 'form-control', 'id'=>'demoDate7', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-4">
  {{ Form::label('CANTIDAD', 'CANTIDAD') }}
  {{ Form::text('CANTIDAD', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'CANTIDAD']) }}
  @if ($errors->has('CANTIDAD'))
      <small class="form-text text-danger">{{ $errors->first('CANTIDAD') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('BANCO', 'BANCO') }}
  {{ Form::text('BANCO', null, ['class'=> 'form-control', 'required' => 'required ', 'id'=>'BANCO']) }}
  @if ($errors->has('BANCO'))
      <small class="form-text text-danger">{{ $errors->first('BANCO') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('STATUS', 'STATUS') }}
  {{ Form::select('STATUS',['1'=>'Pendiente','2'=>'Pagada','3'=>'Sin factura pendiente','4'=>'Sin factura pagada'], null, ['class'=> 'form-control','required' => 'required ', 'id'=>'STATUS']) }}
  @if ($errors->has('STATUS'))
      <small class="form-text text-danger">{{ $errors->first('STATUS') }}</small>
  @endif
</div>

<div class="form-group col-md-12">
  {{ Form::submit('Guardar', ['class'=> 'btn btn-sm btn-primary']) }}
</div>
