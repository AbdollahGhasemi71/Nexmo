<?php

namespace Nexmo\User\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetpasswordCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $code;

    public function __construct($code)
    {
        $this->code = $code;
    }


    public function build()
    {
        return $this->markdown('User::mails.reset-password-code-email')
            ->subject('کد بازیابی رمز عبور  || ایمیل در وب سایت قاسمی');

    }
}
