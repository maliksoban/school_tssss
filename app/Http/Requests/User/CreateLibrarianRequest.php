<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateLibrarianRequest
 * @package App\Http\Requests\User
 */
class CreateLibrarianRequest extends FormRequest
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
            'tssss_id' => 'required|string|max:255|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'sometimes|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'required',
            'blood_group' => 'required',
            'phone_number' => 'required',
        ];
    }
}
