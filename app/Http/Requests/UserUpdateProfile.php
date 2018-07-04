<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateProfile extends FormRequest
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
            'name' => 'required|string|min:2|max:50',
            'last_name' => 'required|string|min:2|max:50',
            'phone' => 'nullable|string|min:2|max:50',
            'passport' => 'nullable|string|min:2|max:50',
            'wallet' => 'nullable|string|min:2|max:50',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable|string|min:2|max:50',
            'city' => 'nullable|string|min:2|max:50',
            'country' => 'nullable|string|min:2|max:50',
            'avatar' => 'nullable|image',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'last_name' => 'Last name',
            'phone' => 'Phone',
            'passport' => 'ID or Passport Number',
            'date_of_birth' => 'Date of birth',
            'address' => 'Address',
            'city' => 'City',
            'country' => 'Country',
            'avatar' => 'Avatar',
            ];
    }

}
