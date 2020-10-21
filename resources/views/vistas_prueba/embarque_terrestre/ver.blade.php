@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text"></i> EMBARQUE TERRESTRE</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="/embarque_terrestre"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a></li>

  </ul>
</div>
<div>
  <div class="row">
    <div class="col-md-3">
      <div class="tile">
        <div class="col-md-12">
            <br>
            <p><strong>ID EMBARQUE</strong><label class="text-muted">: CESCORP2019001</label></p>
            <p><strong>OC</strong><label class="text-muted">: 1912020</label></p>
            <p><strong>FACTURA PAGADO</strong><label class="text-muted">: x</label></p>
            <p><strong>FACTURA COBRADA </strong><label class="text-muted">: x</label></p>
            <p><strong>FECHA FACTURA</strong><label class="text-muted">: 02 DE DICIEMBRE</label></p>
            <p><strong>NUM. FACT.</strong><label class="text-muted">: A-648</label></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="tile">
        <div class="col-md-12">
            <br>
            <p><strong>VENDEDOR</strong><label class="text-muted">: ARTURO</label></p>
            <p><strong>OPERADOR</strong><label class="text-muted">: ERIK</label></p>
            <p><strong>CLIENTE</strong><label class="text-muted">: HELLMANN</label></p>
            <p><strong>FECHA DE EMBARQUE</strong><label class="text-muted">: 27 NOVIEMBRE</label></p>
            <p><strong>MERCANCIA</strong><label class="text-muted">: 1</label></p>
            <p><strong>PESO</strong><label class="text-muted">: LEGAL</label></p>
          </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="tile">
          <div class="col-md-12">
            <br>
            <p><strong>INTERMEDIARIO</strong><label class="text-muted">: KSO</label></p>
            <p><strong>LINEA MX/US</strong><label class="text-muted">: MX</label></p>
            <p><strong>NOMBRE OPERADOR</strong><label class="text-muted">: S/N</label></p>
            <p><strong>PLACAS CAJA</strong><label class="text-muted">: 11-EM-9L</label></p>
            <p><strong>NO. SERIE CAJA</strong><label class="text-muted">: N/A</label></p>
            <p><strong>IMPO/EXPO</strong><label class="text-muted">: N/A</label></p>
          </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="tile">
        <div class="col-md-12">
          <br>
          <p><strong>PLACAS TRACTO</strong><label class="text-muted">: N/A</label></p>
          <p><strong>TIPO DE UNIDAD</strong><label class="text-muted">: FIRD SECA 12 PIES</label></p>
          <p><strong>DETALLES RUTA</strong><label class="text-muted">: N/A</label></p>
          <p><strong>FLETE</strong><label class="text-muted">: $80000</label></p>
          <p><strong>MOVIMIENTO FALSO</strong><label class="text-muted">: N/A</label></p>
          <p><strong>TRASNBORDO</strong><label class="text-muted">: N/A</label></p>
        </div>
      </div>
    </div>




  <div class="col-md-3">
      <div class="tile">
       <div class="col-md-12">
          <br>
          <p><strong>MANIOBRA DESCARGA</strong><label class="text-muted">: CESCORP2019001</label></p>
          <p><strong>SOBRE PESO</strong><label class="text-muted">: N/A</label></p>
          <p><strong>ESTADIAS</strong><label class="text-muted">: N/A</label></p>
          <p><strong>SEGURO</strong><label class="text-muted">: N/A</label></p>
          <p><strong>MONEDA</strong><label class="text-muted">MX</label></p>
          <p><strong>CRUCE</strong><label class="text-muted">: N/A</label></p>
       </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="tile">
      <div class="col-md-12">
        <br>
        <p><strong>TRASNBORDO</strong><label class="text-muted">: N/A</label></p>
        <p><strong>SUBTOTAL</strong><label class="text-muted">: $80,000.00</label></p>
        <p><strong>IVA 16%</strong><label class="text-muted">: $12,800</label></p>
        <p><strong>RTN 4%</strong><label class="text-muted">: $3,200.00</label></p>
        <p><strong>TOTAL</strong><label class="text-muted">: $89,600.00</label></p>
        <p><strong>REFERENCIA FACTURA</strong><label class="text-muted">: 867</label></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="tile">
        <div class="col-md-12">
          <br>
          <p><strong>TRANPORTE MX</strong><label class="text-muted">: KSO</label></p>
          <p><strong>$</strong><label class="text-muted">: $56,000</label></p>
          <p><strong>FALSO</strong><label class="text-muted">: S/N</label></p>
          <p><strong>FLETE USA</strong><label class="text-muted">: 11-EM-9L</label></p>
          <p><strong>BODEGA</strong><label class="text-muted">: N/A</label></p>
          <p><strong>DEMORAS</strong><label class="text-muted">: N/A</label></p>
        </div>
      </div>
  </div>
  <div class="col-md-3">
    <div class="tile">
      <div class="col-md-12">
        <br>
        <p><strong>MANIOBRAS</strong><label class="text-muted">: N/A</label></p>
        <p><strong>SOBRE PESO</strong><label class="text-muted">: N/A</label></p>
        <p><strong>REPARTOS</strong><label class="text-muted">: N/A</label></p>
        <p><strong>ESTADIAS</strong><label class="text-muted">: N/A</label></p>
        <p><strong>CRUCE</strong><label class="text-muted">: N/A</label></p>
        <p><strong>USD</strong><label class="text-muted">: N/A</label></p>
        <p><strong>MXN</strong><label class="text-muted">: N/A</label></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="tile">
      <div class="col-md-12">
        <br>
        <p><strong>PROFIT SHARE</strong><label class="text-muted">: $56,000.00</label></p>
        <p><strong>SUBTOTAL</strong><label class="text-muted">: N/A</label></p>
        <p><strong>IVA 16%</strong><label class="text-muted">: N/A</label></p>
        <p><strong>RETN 4%</strong><label class="text-muted">: N/A</label></p>
        <p><strong>TOTAL PROVEEDOR</strong><label class="text-muted">: $56,000.00</label></p>
        <p><strong>UTILIDAD</strong><label class="text-muted">: $33,600</label></p>
        <p><strong>COMISIÓN</strong><label class="text-muted">: N/A</label></p>
        <p><strong>UTILIDAD REAL</strong><label class="text-muted">: $33,600</label></p>
      </div>
    </div>
  </div>

 </div>
</div>
@endsection
