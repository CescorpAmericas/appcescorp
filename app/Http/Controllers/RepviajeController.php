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
      $repviaje = repviaje::create($request->all());
      $categorias = $request->input("categorias");
      return redirect()->route('repviajes.edit', $repviaje->id)
      ->with('info','Reporte viaje guardado con éxito');


      $repviaje = repviaje::create($request->all());
      public function store(MensajeFormRequest $request)
      {
          $slug = uniqid();
          $mensaje = new Mensaje(array(
              'titulo' => $request->get('titulo'),
              'contenido' => $request->get('contenido'),
              'slug' => $slug
          ));
          $mensaje->save();
          return redirect('/contacto')->with('status', 'Su ticket ha sido creado, su id única es ' . $slug);
      }*/
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
    public function update(Request $request, repviaje $repviaje)
    {
      $repviaje->update($request->all());
      return redirect()->route('repviajes.edit', $repviaje->id)
      ->with('info','Reporte viaje actualizado con éxito');
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
