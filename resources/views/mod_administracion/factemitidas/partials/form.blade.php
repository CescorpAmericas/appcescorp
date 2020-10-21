

<div class="form-group col-md-4">
  {{ Form::label('CLIENTE', 'CLIENTE') }}
  {{ Form::text('CLIENTE', null, ['class'=> 'form-control','required' => 'required ', 'id'=>'CLIENTE']) }}
  @if ($errors->has('CLIENTE'))
      <small class="form-text text-danger">{{ $errors->first('CLIENTE') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('FACTURA', 'FACTURA') }}
  {{ Form::text('FACTURA', null, ['class'=> 'form-control','required' => 'required ', 'id'=>'FACTURA']) }}
  @if ($errors->has('FACTURA'))
      <small class="form-text text-danger">{{ $errors->first('FACTURA') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('RAZON_SOCIAL', 'RAZON SOCIAL') }}
  {{ Form::text('RAZON_SOCIAL', null, ['class'=> 'form-control','required' => 'required ', 'id'=>'RAZON_SOCIAL']) }}
  @if ($errors->has('RAZON_SOCIAL'))
      <small class="form-text text-danger">{{ $errors->first('RAZON_SOCIAL') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('TOTAL_FACTURADO', 'TOTAL FACTURADO') }}
  {{ Form::text('TOTAL_FACTURADO', null, ['class'=> 'form-control','required' => 'required ', 'id'=>'TOTAL_FACTURADO']) }}
  @if ($errors->has('TOTAL_FACTURADO'))
      <small class="form-text text-danger">{{ $errors->first('TOTAL_FACTURADO') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('SUB_TOTAL', 'SUB TOTAL') }}
  {{ Form::text('SUB_TOTAL', null, ['class'=> 'form-control','required' => 'required ', 'id'=>'SUB_TOTAL']) }}
  @if ($errors->has('SUB_TOTAL'))
      <small class="form-text text-danger">{{ $errors->first('SUB_TOTAL') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('IVA_TOTAL', 'IVA TOTAL') }}
  {{ Form::text('IVA_TOTAL', null, ['class'=> 'form-control','required' => 'required ', 'id'=>'IVA_TOTAL']) }}
  @if ($errors->has('IVA_TOTAL'))
      <small class="form-text text-danger">{{ $errors->first('IVA_TOTAL') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('IVA_RETENIDO', 'IVA RETENIDO') }}
  {{ Form::text('IVA_RETENIDO', null, ['class'=> 'form-control','required' => 'required ', 'id'=>'IVA_RETENIDO']) }}
  @if ($errors->has('IVA_RETENIDO'))
      <small class="form-text text-danger">{{ $errors->first('IVA_RETENIDO') }}</small>
  @endif
</div>
<div class="form-group col-md-4">
  {{ Form::label('FECHA', 'FECHA') }}
  {{ Form::text('FECHA', null, ['class'=> 'form-control', 'id'=>'demoDate8', 'type'=>'text', 'placeholder'=>'Seleccione fecha', 'required' => 'required ']) }}
</div>
<div class="form-group col-md-4">
  {{ Form::label('STATUS', 'STATUS') }}
  {{ Form::select('STATUS',['1'=>'Activo','2'=>'Cancelar'], null, ['class'=> 'form-control','required' => 'required ', 'id'=>'STATUS']) }}
  @if ($errors->has('STATUS'))
      <small class="form-text text-danger">{{ $errors->first('STATUS') }}</small>
  @endif
</div>
<div class="form-group col-md-12">
  {{ Form::submit('Guardar', ['class'=> 'btn btn-sm btn-primary']) }}
</div>
