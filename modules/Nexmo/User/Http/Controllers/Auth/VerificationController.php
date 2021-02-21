<?php

namespace Nexmo\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Nexmo\User\Http\Requests\VerfiyCodeMailRequest;
use Nexmo\User\Services\VerifyCodeService;

class VerificationController extends Controller
{


    use VerifiesEmails;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('User::auth.verify');
    }

    public function verify(VerfiyCodeMailRequest $request)
    {
        if (!VerifyCodeService::check(auth()->id(), $request->verify_code)) {
            return back()->withErrors('کد وارد شده معتبر نمی باشد بررسی نمایید');
        }
        auth()->user()->markEmailAsVerified();
        return redirect(route('home'));
    }


}
