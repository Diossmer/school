<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarMateriaRequest extends FormRequest
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
    /* public function getStatusCode(){
        return 200;
    }
    public function getMessage(){
        return "Actualizado correctamente";
    } */
    public function rules()
    {
        return [
            //
            "nombre"=> "required",
            "codigo_escolar"=>"required|unique:materias,id,".$this->route('materia')->codigo_escolar,
        ];
    }
}
