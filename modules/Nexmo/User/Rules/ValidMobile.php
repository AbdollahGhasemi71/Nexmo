<?php

namespace Nexmo\User\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidMobile implements Rule
{

    public function __construct()
    {
        //
    }


    public function passes($attribute, $value)
    {
        return preg_match('/^9[0-9]{9}$/', $value);

    }


    public function message()
    {
        return 'فرمت موبایل شما صحیح نمی باشد لطفا بررسی نمایید';
    }
}
