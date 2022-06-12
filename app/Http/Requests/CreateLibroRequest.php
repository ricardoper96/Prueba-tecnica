<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLibroRequest extends FormRequest
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
            'ISBM'=> 'required|string|min:1',
            'Titulo'=> 'required|string|min:1',
            'NumerosEjemplares'=> 'required|integer|min:1',
            'idAutor'=> 'required|integer|min:1|exists:Autor,id',
            'idEditorial'=> 'required|integer|min:1|exists:Editorial,id',
            'idTema'=> 'required|integer|min:1|exists:idTema,id',
            //
        ];
    }
}
