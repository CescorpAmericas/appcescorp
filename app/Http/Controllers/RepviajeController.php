<?php

namespace App\Http\Controllers;

use App\repviaje;
use Illuminate\Http\Request;

class RepviajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $repviajes1 = repviaje::where('status','=','3')
      ->orderBy('id','desc')
      ->paginate(10);
      $repviajes2 = repviaje::where('status','=','4')
      ->orderBy('id','desc')
      ->paginate(10);
      $repviajes3 = repviaje::where('status','=','1')
      ->orderBy('id','desc')
      ->paginate(10);
      $repviajes4 = repviaje::where('status','=','2')
      ->orderBy('id','desc')
      ->paginate(10);
      return view('Mod_administracion.repviajes.index', compact('repviajes1','repviajes2','repviajes3','repviajes4'));

      /*$repviajes= repviaje::orderBy('id','desc')->paginate();
      return view('Mod_administracion.repviajes.index', compact('repviajes'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mod_administracion.repviajes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $repviaje = new repviaje;
      $repviaje->cliente = $request->cliente;
      $repviaje->origen = $request->origen;
      $repviaje->destino = $request->destino;
      $repviaje->estado = $request->estado;
      $repviaje->unidad = $request->unidad;
      $repviaje->camion = $request->camion;
      $repviaje->proveedor = $request->proveedor;
      $repviaje->referencia = $request->referencia;
      $repviaje->tipo_carga = $request->tipo_carga;
      $repviaje->tipo_viaje = $request->tipo_viaje;
      $repviaje->zona_cruce = $request->zona_cruce;
      $repviaje->fecha_carga = $request->fecha_carga;
      $repviaje->hora_carga = $request->hora_carga;
      $repviaje->fecha_descarga = $request->fecha_descarga;
      $repviaje->hora_entrega = $request->hora_entrega;
      $repviaje->status = $request->status;
      $repviaje->comentario = $request->comentario;
      $repviaje->po_o_ci = $request->po_o_ci;

      $repviaje->flete = $request->flete;
      $repviaje->moviento_falso = $request->moviento_falso;
      $repviaje->transbordo = $request->transbordo;
      $repviaje->maniobras_descarga = $request->maniobras_descarga;
      $repviaje->sobrepeso = $request->sobrepeso;
      $repviaje->estadias = $request->estadias;
      $repviaje->seguro = $request->seguro;
      $repviaje->moneda = $request->moneda;
      $repviaje->cruce = $request->cruce;
      $repviaje->demoras = $request->demoras;

      $repviaje->subtotal = $repviaje->flete + $repviaje->moviento_falso
                          + $repviaje->transbordo + $repviaje->maniobras_descarga
                          + $repviaje->sobrepeso + $repviaje->estadias + $repviaje->seguro
                          + $repviaje->cruce + $repviaje->demoras;
      /*$repviaje->subtotal = $request->$subtotal;*/
      $repviaje->iva = $repviaje->subtotal * '0.16';
      /*$repviaje->iva = $request->iva;*/
      $repviaje->ret = $repviaje->subtotal * '0.04';
      /*$repviaje->ret = $request->ret;*/
      $repviaje->total = $repviaje->subtotal + $repviaje->iva - $repviaje->ret;
      /*$repviaje->total = $request->total;*/
      $repviaje->save();
      return redirect()->route('repviajes.edit', $repviaje->id)
      ->with('info','Reporte viaje guardado con éxito');
      /*$repviaje = repviaje::create($request->all());
      return redirect()->route('repviajes.edit', $repviaje->id)
      ->with('info','Reporte viaje guardado con éxito');*/

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\repviaje  $repviaje
     * @return \Illuminate\Http\Response
     */
    public function show(repviaje $repviaje)
    {
          return view('Mod_administracion.repviajes.show', compact('repviaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\repviaje  $repviaje
     * @return \Illuminate\Http\Response
     */
    public function edit(repviaje $repviaje)
    {
        return view('Mod_administracion.repviajes.edit', compact('repviaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\repviaje  $repviaje
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, repviaje $repviaje)*/
    public function update(Request $request, repviaje $repviaje)
    {
      //$repviaje = repviaje::find($request->id);
      $repviaje->cliente = $request->cliente;
      $repviaje->origen = $request->origen;
      $repviaje->destino = $request->destino;
      $repviaje->estado = $request->estado;
      $repviaje->unidad = $request->unidad;
      $repviaje->camion = $request->camion;
      $repviaje->proveedor = $request->proveedor;
      $repviaje->referencia = $request->referencia;
      $repviaje->tipo_carga = $request->tipo_carga;
      $repviaje->tipo_viaje = $request->tipo_viaje;
      $repviaje->zona_cruce = $request->zona_cruce;
      $repviaje->fecha_carga = $request->fecha_carga;
      $repviaje->hora_carga = $request->hora_carga;
      $repviaje->fecha_descarga = $request->fecha_descarga;
      $repviaje->hora_entrega = $request->hora_entrega;
      $repviaje->status = $request->status;
      $repviaje->comentario = $request->comentario;
      $repviaje->po_o_ci = $request->po_o_ci;

      $repviaje->flete = $request->flete;
      $repviaje->moviento_falso = $request->moviento_falso;
      $repviaje->transbordo = $request->transbordo;
      $repviaje->maniobras_descarga = $request->maniobras_descarga;
      $repviaje->sobrepeso = $request->sobrepeso;
      $repviaje->estadias = $request->estadias;
      $repviaje->seguro = $request->seguro;
      $repviaje->moneda = $request->moneda;
      $repviaje->cruce = $request->cruce;
      $repviaje->demoras = $request->demoras;

      $repviaje->subtotal = $repviaje->flete + $repviaje->moviento_falso
                          + $repviaje->transbordo + $repviaje->maniobras_descarga
                          + $repviaje->sobrepeso + $repviaje->estadias + $repviaje->seguro
                          + $repviaje->cruce + $repviaje->demoras;
      /*$repviaje->subtotal = $request->$subtotal;*/
      $repviaje->iva = $repviaje->subtotal * '0.16';
      /*$repviaje->iva = $request->iva;*/
      $repviaje->ret = $repviaje->subtotal * '0.04';
      /*$repviaje->ret = $request->ret;*/
      $repviaje->total = $repviaje->subtotal + $repviaje->iva - $repviaje->ret;
      /*$repviaje->total = $request->total;*/
      $repviaje->save();
      return redirect()->route('repviajes.edit', $repviaje->id)
      ->with('info','Reporte viaje actualizado con éxito');
      /*$repviaje->update($request->all());
      return redirect()->route('repviajes.edit', $repviaje->id)
      ->with('info','Reporte viaje actualizado con éxito');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\repviaje  $repviaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $repviaje)
    {
      if ($request->ajax()) {
        $repviaje = \App\repviaje::find($repviaje);
        $repviaje->delete();

        return response()->json([
          'message'=>$repviaje->cliente . ' Fue eliminado correctamente'
        ]);
      }
    }
}
