<?php

namespace Nexmo\Social\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialCreateRequest extends FormRequest
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
            'instagram' => 'nullable|max:100',
            'telegram' => 'nullable|max:100',
            'twitter' => 'nullable|max:100',
            'linkedin' => 'nullable|max:100'
        ];
    }
}
