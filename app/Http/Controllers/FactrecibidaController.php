<?php

namespace App\Http\Controllers;

use App\Factrecibida;
use Illuminate\Http\Request;
use App\Http\Requests\FactrecibidaStoreRequest;
use App\Http\Requests\FactrecibidaUpdateRequest;

class FactrecibidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $factrecibidas1 = Factrecibida::where('STATUS','=','1')
      ->orderBy('id','desc')
      ->paginate(10);
      $factrecibidas2 = Factrecibida::where('STATUS','=','2')
      ->orderBy('id','desc')
      ->paginate(10);
      $factrecibidas3 = Factrecibida::where('STATUS','=','3')
      ->orderBy('id','desc')
      ->paginate(10);
      $factrecibidas4 = Factrecibida::where('STATUS','=','4')
      ->orderBy('id','desc')
      ->paginate(10);
      return view('mod_administracion.factrecibidas.index', compact('factrecibidas1','factrecibidas2','factrecibidas3','factrecibidas4'));

      /*$factrecibidas = Factrecibida::paginate();
      return view('mod_administracion.factrecibidas.index', compact('factrecibidas'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mod_administracion.factrecibidas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FactrecibidaStoreRequest $request)
    {
      $factrecibida = Factrecibida::create($request->all());
      return redirect()->route('factrecibidas.edit', $factrecibida->id)
      ->with('info','Factura recibida guardado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factrecibida  $factrecibida
     * @return \Illuminate\Http\Response
     */
    public function edit(Factrecibida $factrecibida)
    {
      //dd($factrecibida->id);
        return view('mod_administracion.factrecibidas.edit', compact('factrecibida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factrecibida  $factrecibida
     * @return \Illuminate\Http\Response
     */
    public function update(FactrecibidaUpdateRequest $request, Factrecibida $factrecibida)
    {

       $factrecibida->update($request->all());
       return redirect()->route('factrecibidas.edit', $factrecibida->id)
       ->with('info','Factura recibida actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factrecibida  $factrecibida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $factrecibida)
    {
      /*$factrecibida->delete();
      return back()->with('info','Eliminado Correctamente');*/
      if ($request->ajax()) {
        $factrecibida = \App\Factrecibida::find($factrecibida);
        $factrecibida->delete();
        //$shipment_total = \App\Shipment::all()->count():

        return response()->json([
          //'total' => $shipment_total,
          'message'=>$factrecibida->EMPRESA . ' Fue eliminado correctamente'
        ]);
      }
    }
}
