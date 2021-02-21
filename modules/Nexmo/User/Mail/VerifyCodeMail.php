<?php

namespace Nexmo\User\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $code;

    public function __construct($code)
    {
        $this->code = $code;
    }


    public function build()
    {
        return $this->markdown('User::mails.verify-code-mail')
            ->subject('کد فعالسازی  || ایمیل در وب سایت قاسمی');

    }
}
