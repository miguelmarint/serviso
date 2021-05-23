<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScoopRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
                'title' => "required|string|min:10|max:255",
                'author' => "required|string|min:10|max:255",
                'reference' => "required|string|min:10|max:255",
            ];
        } else {
            return [
                'title' => "required|string|min:10|max:255",
                'author' => "required|string|min:10|max:255",
                'reference' => "required|string|min:10|max:255",
            ];
        }
    }
}
