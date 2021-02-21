<?php

namespace Nexmo\Team\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createTeamRequest extends FormRequest
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
            'alt' => 'required|max:100',
            'fullname' => 'required|max:100',
            'job' => 'required|max:100',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:5000',
            'instagram' => 'nullable|max:200',
            'telegram' => 'nullable|max:200',
            'linkdin' => 'nullable|max:200'
        ];
    }
}
