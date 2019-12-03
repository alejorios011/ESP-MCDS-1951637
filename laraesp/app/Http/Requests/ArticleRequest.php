<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        if ($this->method() == "PUT") {
            return [
                'name'        => 'required|unique:articles,name,'.$this->id,
                'content'     => 'required',
                'category_id' => 'required',
            ];
        } else {
            return [
                'name'        => 'required|unique:articles',
                'image'       => 'required',
                'content'     => 'required',
                'category_id' => 'required',
            ];
        }
    }
    public function messages() {
        return [
            'name.required'        => 'El Nombre de Artículo es requerido.',
            'name.unique'          => 'El Nombre de Artículo ya esta registrado.',
            'image.required'       => 'La Imagen es requerida.',
            'content.required'     => 'El Contenido es requerido.',
            'category_id.required' => 'La Categoria es requerida.'
        ];
    }
}
