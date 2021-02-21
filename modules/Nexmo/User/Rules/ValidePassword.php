<?php

namespace Nexmo\User\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidePassword implements Rule
{

    public function __construct()
    {
        //
    }


    public function passes($attribute, $value)
    {
        return preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/', $value);

    }


    public function message()
    {
        return 'پسوورد شما صحیح نمی باشد باید  با ارقام و  رشته و کارکتر باشد';
    }
}
