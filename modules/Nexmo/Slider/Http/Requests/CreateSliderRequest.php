<?php

namespace Nexmo\Slider\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSliderRequest extends FormRequest
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
            'title' => 'required|max:200',
            'caption' => 'required|max:500',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:50000',
            'alt' => 'required|max:100'
        ];
    }
}
