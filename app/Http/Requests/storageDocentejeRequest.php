<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storageDocentejeRequest extends FormRequest
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
            'titulo'=>'required|max:40',
            'edad'=>'integer|max:100',
            'foto'=>'required|image','mimes|jpg,bmp,png'
        ];
    }
}
