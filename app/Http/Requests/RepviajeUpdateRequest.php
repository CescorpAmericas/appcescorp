<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepviajeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'cliente' => 'required|min:1|max:100',
          'origen' => 'required|min:1|max:100',
          'destino' => 'required|min:1|max:100',
          'estado' => 'required|min:1|max:100',
          'unidad' => 'required|min:1|max:100',
          'camion' => 'required|min:1|max:100',
          'proveedor' => 'required|min:1|max:100',
          'referencia' => 'required|min:1|max:191',
          'tipo_carga' => 'required|min:1|max:50',
          'tipo_viaje' => 'required|min:1|max:50',
          'zona_cruce' => 'required|min:1|max:50',
          'fecha_carga' => 'required|date',
          'hora_carga' => 'required',
          'fecha_descarga' => 'required|date',
          'hora_entrega' => 'required',
          'status' => 'required|integer',
          'efectividad_viaje' => 'required|min:1|max:50',
          'comentario' => 'required|min:1|max:100',
          'po_o_ci' => 'required|min:1|max:100',
          'flete' => 'required|numeric',
          'moviento_falso' => 'required|numeric',
          'transbordo' => 'required|numeric',
          'maniobras_descarga' => 'required|numeric',
          'sobrepeso' => 'required|numeric',
          'estadias' => 'required|numeric',
          'seguro' => 'required|numeric',
          'moneda' => 'required|min:1|max:50',
          'cruce' => 'required|numeric',
          'demoras' => 'required|numeric',
          /*'subtotal' => 'required|numeric',
          'iva' => 'required|numeric',
          'ret' => 'required|numeric',
          'total' => 'required|numeric',*/
        ];
    }
}
