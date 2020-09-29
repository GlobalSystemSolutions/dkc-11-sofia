<?php

namespace App\Http\Controllers\Auth;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Events\Auth\UserRequestedActivationEmail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ActivationResendRequest;

class ActivationResendController extends Controller
{
    public function index()
    {
        return view('auth.activation.resend.index');
    }

    public function store(ActivationResendRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (optional($user)->hasNotActivated()) {
            event(new UserRequestedActivationEmail($user));
        }

        flash()->success('Активация на акаунт', 'Изпратен е имейл за активация.');

        return redirect()->route('login');
    }
}
