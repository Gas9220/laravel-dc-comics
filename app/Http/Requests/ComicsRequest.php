<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsRequest extends FormRequest
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
            'title' => 'max:60|required',
            'description' => 'required',
            'thumb' => 'url|required',
            'price' => 'required|decimal:2',
            'series' => 'max:60|required',
            'sale_date' => 'required|date',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ];
    }
}
