<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'description' => 'required|max:100|min:5',
            'status' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please proved valid name',
            'description.min:5' => 'Description at least minimum 5 character',
            'status.required' => 'You missing user field'
        ];
    }
}
