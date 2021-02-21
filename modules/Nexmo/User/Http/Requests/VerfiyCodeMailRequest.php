<?php

namespace Nexmo\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Nexmo\User\Services\VerifyCodeService;

class VerfiyCodeMailRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'verify_code'=>VerifyCodeService::getRule()
        ];
    }
}
