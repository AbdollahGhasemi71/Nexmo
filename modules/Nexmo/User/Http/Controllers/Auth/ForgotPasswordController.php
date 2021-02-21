<?php

namespace Nexmo\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Nexmo\User\Http\Requests\CheckResetpasswordCodeMailRequest;
use Nexmo\User\Http\Requests\ResetPasswordEamilCodeRequest;
use Nexmo\User\Models\User;
use Nexmo\User\repositories\UserRepo;
use Nexmo\User\Services\VerifyCodeService;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public $repo;

    public function __construct(UserRepo $userRepo)
    {
        $this->repo = $userRepo;

    }

    public function showVerifyCodeRequestForm()
    {
        return view('User::auth.passwords.email');
    }

    public function sendVerifyCodeEmail(ResetPasswordEamilCodeRequest $request)
    {
        $user = $this->repo->findByEamil($request->email);
        if ($user && !VerifyCodeService::has($user->id)) {
            $user->sendRessetPasswordCodeNotification();
        }
        return view('User::auth.passwords.reset-password-code');
    }

    public function checkVerifyCodeMail(CheckResetpasswordCodeMailRequest $request)
    {
        $user = $this->repo->findByEamil($request->email);
        if ($user==null || !VerifyCodeService::check($user->id, $request->verify_code)) {
            return back()->withErrors('کد وارد شده معتبر نمباشد');
        }
        auth()->loginUsingId($user->id);
        return redirect()->route('password.showResetForm');
    }
}
