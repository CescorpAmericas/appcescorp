@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text"></i>  FACTURAS EMITIDAS</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('factemitidas.index')}}"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a></li>
  </ul>
</div>
<div class="col-md-12">
  <div class="tile">
    <h3 class="tile-title"></h3>
    <div class="tile-body">
      {!! Form::open(['route' => 'factemitidas.store','class'=>'row']) !!}

      @include('Mod_administracion.factemitidas.partials.form')

      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
