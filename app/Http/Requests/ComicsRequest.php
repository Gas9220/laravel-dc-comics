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

    public function messages()
    {

        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.max' => 'Il titolo può avere massimo 60 caratteri',
            'description.required' => 'Il campo descrizione è obbligatorio',
            'thumb.required' => "E' necessario inserire un url per l'immagine",
            'thumb.url' => 'Inserire un url corretto',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.decimal' => 'Il prezzo deve avere due decimali',
            'series.required' => 'Il campo series è obbligatorio',
            'series.max' => 'Il series può avere massimo 60 caratteri',
            'sale_date.required' => 'Inserire una data',
            'sale_date.date' => 'Inserire una data valida',
            'artists.required' => 'Il campo artists è obbligatorio',
            'artists.string' => 'Inserire una stringa valida nel campo artists',
            'writers.required' => 'Il campo writers è obbligatorio',
            'writers.string' => 'Inserire una stringa valida nel campo writers',
        ];
    }
}
