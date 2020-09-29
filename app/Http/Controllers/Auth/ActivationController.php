<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Token\ConfirmationToken;
use Illuminate\Support\Facades\Auth;

class ActivationController extends Controller
{
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware(['confirmation_token.expired:/']);
    }

    public function activate(ConfirmationToken $token, Request $request)
    {
        $token->user->update([
            'active' => true,
        ]);

        $token->delete();

        Auth::loginUsingId($token->user->id);

        auth()->user()->giveRole('user');

        flash()->success('Успешна активация', 'Успешно активирахте своя акаунт.');

        return redirect()->intended($this->redirectPath());
    }

    protected function redirectPath()
    {
        return $this->redirectTo;
    }
}
