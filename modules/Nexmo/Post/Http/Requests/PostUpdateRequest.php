<?php

namespace Nexmo\Post\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
            'title'=>'required|max:100',
            'alt'=>'required|max:100',
            'subject'=>'required|max:100',
            'author'=>'required|max:100',
            'keywords'=>'required|max:1000',
            'description'=>'required|max:1000',
            'image'=>'image|mimes:jpg,jpeg,png|max:5000',
            'body'=>'required'

        ];
    }
}
