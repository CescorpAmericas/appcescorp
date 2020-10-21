<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactemitidaUpdateRequest extends FormRequest
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
          'CLIENTE'=>'required|min:1|max:100',
          'FACTURA'=>'required|min:1|max:100',
          'RAZON_SOCIAL'=>'required|min:1|max:100',
          'TOTAL_FACTURADO'=>'required|numeric',
          'SUB_TOTAL'=>'required|numeric',
          'IVA_TOTAL'=>'required|numeric',
          'IVA_RETENIDO'=>'required|numeric',
          'FECHA'=>'required|date',
          'STATUS'=>'required|int',
        ];
    }
}
