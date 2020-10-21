<?php

namespace App\Http\Controllers;

use App\Factemitida;
use App\Http\Requests\FactemitidaStoreRequest;
use App\Http\Requests\FactemitidaUpdateRequest;
use Illuminate\Http\Request;

class FactemitidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $factemitidas1 = Factemitida::where('STATUS','=','1')
    ->orderBy('id','desc')
    ->paginate(10);
    $factemitidas2 = Factemitida::where('STATUS','=','2')
    ->orderBy('id','desc')
    ->paginate(10);
    return view('mod_administracion.factemitidas.index', compact('factemitidas1','factemitidas2'));


    /*  $factemitidas = Factemitida::paginate();
      return view('mod_administracion.factemitidas.index', compact('factemitidas'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mod_administracion.factemitidas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FactemitidaStoreRequest $request)
    {
      $factemitida = Factemitida::create($request->all());
      return redirect()->route('factemitidas.edit', $factemitida->id)
      ->with('info','Factura emitida guardado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factemitida  $factemitida
     * @return \Illuminate\Http\Response
     */
    public function edit(Factemitida $factemitida)
    {
        return view('mod_administracion.factemitidas.edit', compact('factemitida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factemitida  $factemitida
     * @return \Illuminate\Http\Response
     */
    public function update(FactemitidaUpdateRequest $request, Factemitida $factemitida)
    {

       $factemitida->update($request->all());
       return redirect()->route('factemitidas.edit', $factemitida->id)
       ->with('info','Factura emitida actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factemitida  $factemitida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $factemitida)
    {
      /*$factemitida->delete();
      return back()->with('info','Eliminado Correctamente');*/

      if ($request->ajax()) {
        $factemitida = \App\Factemitida::find($factemitida);
        $factemitida->delete();
        //$shipment_total = \App\Shipment::all()->count():

        return response()->json([
          //'total' => $shipment_total,
          'message'=>$factemitida->CLIENTE . ' Fue eliminado correctamente'
        ]);
      }
    }
}
