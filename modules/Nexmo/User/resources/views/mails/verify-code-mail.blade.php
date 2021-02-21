@component('mail::message')
# کد فعالسازس ایمیل

کد برای شما ارسال شده است بررسی نمایید.

@component('mail::panel', ['url' => ''])
 کد فعالسازی : {{$code}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
