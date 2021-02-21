@component('mail::message')
# کد بازیابی رمز عبور

کد برای شما ارسال شده است بررسی نمایید.

@component('mail::panel', ['url' => ''])
 کد بازیابی : {{$code}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
