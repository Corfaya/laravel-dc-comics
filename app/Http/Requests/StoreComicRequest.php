<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:100',
                'description' => 'max:5000',
                'thumb' => 'required|max:255',
                'price' => 'decimal:2',
                'series' => 'required|max:255',
                'sale_date' => 'required|date',
                'type' => 'required|max:50',
                'artists' => 'required',
                'writers' => 'required'
        ];
    }

    public function messages()
    {
        return
            [
                'title.required' => 'Questo campo è obbligatorio',
                'title.max' => 'Il numero massimo di caratteri è 100',
                'description.max' => 'Il numero massimo di caratteri è 5000',
                'thumb.required' => 'Questo campo è obbligatorio',
                'thumb.max' => 'Il numero massimo di caratteri è 255',
                'price.decimal' => 'Puoi inserire massimo due numeri dopo la virgola',
                'series.required' => 'Questo campo è obbligatorio',
                'series.max' => 'Il numero massimo di caratteri è 255',
                'type.required' => 'Questo campo è obbligatorio',
                'type.max' => 'Il numero massimo di caratteri è 50',
                'sale_date.required' => 'Questo campo è obbligatorio',
                'sale_date.date' => 'Deve essere una data in formato gg/mm/aaaa',
                'artists.required' => 'Questo campo è obbligatorio',
                'writers.required' => 'Questo campo è obbligatorio',
            ];
    }
}
