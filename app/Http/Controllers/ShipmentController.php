<?php

namespace App\Http\Controllers;

use App\Shipment;
use App\Http\Requests\ShipmentStoreRequest;
use App\Http\Requests\ShipmentUpdateRequest;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $shipments = Shipment::orderBy('id','desc')->paginate();
      return view('mod_administracion.shipments.index', compact('shipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mod_administracion.shipments.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShipmentStoreRequest $request)
    {
      $shipment = Shipment::create($request->all());
      return redirect()->route('shipments.edit', $shipment->id)
      ->with('info','Embarque guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show(Shipment $shipment)
    {
        //dd($shipment->id);
        return view('mod_administracion.shipments.show', compact('shipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipment $shipment)
    {
        return view('mod_administracion.shipments.edit', compact('shipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(ShipmentUpdateRequest $request, Shipment $shipment)
    {

       $shipment->update($request->all());
       return redirect()->route('shipments.edit', $shipment->id)
       ->with('info','Embarque actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $shipment)
    {
      /*$shipment->delete();
      return back()->with('info','Eliminado Correctamente');*/
      if ($request->ajax()) {
        $shipment = \App\Shipment::find($shipment);
        $shipment->delete();
        //$shipment_total = \App\Shipment::all()->count():

        return response()->json([
          //'total' => $shipment_total,
          'message'=>$shipment->ID_EMBARQUE . ' Fue eliminado correctamente'
        ]);
      }
    }
}
