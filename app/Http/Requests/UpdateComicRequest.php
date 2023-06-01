<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:1|max:100',
            'type' => 'required|min:3|max:30',
            'thumb' => 'required',
            'price' => 'required|min:1|max:10',
            'description' => 'nullable',
            'series' => 'required|min:2|max:50',
            'sale_date' => 'required|date|after:00/00/0000',
        ];
    }

    /**
     * Description
     * @returns {any}
     * */
    public function messages()
    {
        return [
            'title.required' => 'Inserisci un titolo',
            'title.min' => 'Il titolo deve essere lungo più di :min',
            'title.max' => 'Il titolo deve essere più corto di :max',
            'type.required' => 'Inserisci una tipologia',
            'type.min' => 'La tipologia deve essere lunga più di :min',
            'type.max' => 'La tipologia deve essere più corta di :max',
            'thumb.required' => 'Inserisci un\'immagine',
            'price.required' => 'Inserisci un prezzo',
            'price.min' => 'Il prezzo deve essere lungo più di :min',
            'price.max' => 'Il prezzo deve essere più corto di :max',
            'series.required' => 'Inserisci la serie',
            'series.min' => 'La serie deve essere lunga più di :min',
            'series.max' => 'La serie deve essere più corta di :max',
            'sale_date.required' => 'Inserisci una data',
            'sale_date.date' => 'Inserisci un formato data corretto: aaaa/mm/dd',
            'sale_date.after' => 'Inserisci una data dopo l\'anno 0',
        ];
    }
}
