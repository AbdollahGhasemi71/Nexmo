<?php

namespace Nexmo\User\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Nexmo\User\Mail\VerifyCodeMail;
use Nexmo\User\Services\VerifyCodeService;

class VerifyCodeVerificationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        $code = VerifyCodeService::generate();
        VerifyCodeService::store($notifiable->id, $code,120);
        return (new VerifyCodeMail($code))->to($notifiable->email);

    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
