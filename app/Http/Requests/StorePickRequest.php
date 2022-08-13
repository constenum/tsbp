<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePickRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules() : array
    {

        return [
            'user_id' => ['required', 'numeric'],
            'week_id' => ['required', 'numeric'],
            'pick_count' => ['required', 'numeric', 'max:5'],
        ];
    }

    public function messages() : array
    {
        return [
            'pick_count.max' => 'You may not pick more than 5 games. Please correct your picks. New picks have been deselected.',
        ];
    }
}
