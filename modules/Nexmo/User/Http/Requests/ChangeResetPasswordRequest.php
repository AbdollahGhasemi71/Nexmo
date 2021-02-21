<?php

namespace Nexmo\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Nexmo\User\Rules\ValidePassword;

class ChangeResetPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() == true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => ['required', new ValidePassword(), 'confirmed']
        ];
    }
}
