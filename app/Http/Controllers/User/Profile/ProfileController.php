<?php

namespace App\Http\Controllers\User\Profile;

use Auth;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProfileController extends Controller
{

    public function index(Request $request)
    {
        $user = auth()->user();
        $role = auth()->user()->roles->first();

        return view('user.profile', [
            'user' => $user,
            'user_role' => $role,
        ]);
    }
}
