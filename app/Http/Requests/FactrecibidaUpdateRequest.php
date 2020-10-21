<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactrecibidaUpdateRequest extends FormRequest
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
          'EMPRESA'=>'required|min:1|max:100',
          'FOLIO'=>'required|integer',
          'SUBTOTAL'=>'required|numeric',
          'IVA'=>'required|numeric',
          'IVA_RETENIDO'=>'required|numeric',
          'TOTAL'=>'required|numeric',
          'FECHA_FACTURA'=>'required|date',
          'VENCIMIENTO'=>'required|date',
          'FECHA_PAGO'=>'required|date',
          'CANTIDAD'=>'required|numeric',
          'BANCO'=>'required|min:1|max:100',
          'STATUS'=>'required|integer',
        ];
    }
}
