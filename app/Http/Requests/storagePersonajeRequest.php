<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storagePersonajeRequest extends FormRequest
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
            'nombre'=>'required|max:10','size:10',
            'imagen'=>'required|image','mimes|jpg,bmp,png','dimensions|min_width=100,min_height=200','file|size:150',
            'descripcion' => 'max:15','size:15'
            //'imagen' => 'dimensions:min_width=100,min_height=200'
       ];
    }
}
