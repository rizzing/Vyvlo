<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMapMarker extends FormRequest
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
            'latitude' => 'required|string|min:2|max:50',
            'longitude' => 'required|string|min:2|max:50',
            'description' => 'required|string|min:2|max:500',
        ];
    }

    /*public function attributes()
    {
        return [
        ];
    }*/
}
