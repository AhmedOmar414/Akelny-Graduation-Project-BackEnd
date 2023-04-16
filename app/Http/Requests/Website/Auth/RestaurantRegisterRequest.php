<?php

namespace App\Http\Requests\Website\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRegisterRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:5|max:25',

            'logo' => 'image|mimes:jpg,png,jpeg,gif',
            'lat' => 'required',
            'lng' => 'required',
            'tax_registration_number' => 'required|numeric',
            'open_at' => 'required',
            'close_at' => 'required',
        ];
    }
}
