<?php

namespace Nexmo\about\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutcreateRequest extends FormRequest
{

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
            'title' => 'required|max:100',
            'image' => 'required|image|mimes:png,jpeg,jpg|max:5000',
            'description' => 'required',
            'alt' => 'required|max:100'
        ];
    }
}
