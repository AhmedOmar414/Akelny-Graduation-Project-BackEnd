<?php

namespace App\Http\Requests\Restaurant\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'mobile' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5|max:25',
            'photo' => '',
            'address' => 'required|string|max:100',
            'open_time' => 'required',
            'close_time' => 'required',
        ];
    }
}
