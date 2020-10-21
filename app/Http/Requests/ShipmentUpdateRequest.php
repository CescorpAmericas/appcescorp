<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipmentUpdateRequest extends FormRequest
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
          'O_C' => 'required|integer',
          'CLIENTE' => 'required|min:1|max:100',
          'ID_EMBARQUE' => 'required|min:1|max:191',
          'FOLIO_FACT_CESCORP' => 'required|min:1|max:100',
          'CANTIDAD_FACT_CESCORP' => 'required|numeric',
          'FECHA_FACT_CESCORP' => 'required|date',
          'NOMBRE_TRANSP' => 'required|min:1|max:100',
          'FOLIO_TRANSP' => 'required|min:1|max:100',
          'CANTIDAD_TRANSP' => 'required|numeric',
          'FECHA_TRANSP' => 'required|date',
          'REP_TRANSP' => 'required|min:1|max:50',
          'CANTIDAD_PAGO_CLIENTE' => 'required|numeric',
          'FECHA_PAGO_CLIENTE' => 'required|date',
          'REP_PAGO_CLIENTE' => 'required|numeric',
          'CANTIDAD_PAGO_TRANSP' => 'required|numeric',
          'FECHA_PAGO_TRANSP' => 'required|date',
          'PROFIT' => 'required|numeric',
        ];
    }
}
