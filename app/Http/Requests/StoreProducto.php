<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
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
                'codigo' => 'required|max:10',
                'descripcion' => 'required|min:10',
                'detalle' => 'required',
                'precio' => 'required',
                'slug' => 'required'               
        ];
    }

    public function attributes() {
        return [
            'codigo' => 'codigo de producto',
            'precio' => 'precio del prodcuto'
        ];
    }

    public function messages(){
        return [
            'descripcion.required' => 'Dale carga la descripcion idiota'
        ];
    }
}
