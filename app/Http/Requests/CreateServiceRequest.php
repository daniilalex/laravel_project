<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|integer|min:0',
            'duration' => 'required|integer|min:0'
        ];
    }

    public function messages()
    {
        return [
            'email' => 'Bad email',
            'title' => 'Please fill the field',
            'description' => 'Please fill the field',
            'price' => 'Must be more than 0',
        ];
    }
}
