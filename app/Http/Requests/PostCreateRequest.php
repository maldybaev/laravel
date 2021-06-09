<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title' => "required",
            'description' => "required",
        ];
    }

    public function messages()
    {
      return [
        'title.required' => 'Необходимо указать заголовок',
        'description.required'  => 'Необходимо написать текст статьи',
      ];
    }
}
