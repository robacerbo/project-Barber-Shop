<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'description' => 'required|max:50',
            'stylist' => 'required|min:3',
            'level' => 'required|min:3',
            'price' => 'required',
            'startdate' => 'required',
            'certificate' => 'required|min:3',
            'coverimg' => 'required|image',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Hai dimenticato di inserire il nome del corso.',
            'name.min' => 'Il nome del corso deve essere di almeno 3 caratteri.',
            'description.required' => 'Hai dimenticato di inserire la descrizione del corso.',
            'description.max' => 'La descrizione non può contenere piu di 50 caratteri.',
            'stylist.required' => 'Hai dimenticato di inserire il nome dello stilista.',
            'stylist.min' => 'Il nome dello stilista deve essere di almeno 3 caratteri',
            'level.required' => 'Hai dimenticato di inserire la descrizione del livello.',
            'level.min' => 'Il nome del livello del corso deve essere di almeno 3 caratteri',
            'price.required' => 'Hai dimenticato di inserire il prezzo',
            'startdate.required' => 'Inserisci obbligatoriamente una data',
            'certificate.required' => 'Hai dimenticato di inserire il nome del certificato',
            'certificate.min' => 'Il nome del certificato deve essere di almeno 3 caratteri',
            'coverimg.required' => 'Hai dimenticato di inserire l\'immagine',
            'coverimg.image' => 'La foto deve essere un\'immagine jpeg, pgn, webp, jpg.',
        ];
    }
}
