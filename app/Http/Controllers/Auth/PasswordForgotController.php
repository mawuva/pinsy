<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Domain\Passauth\Services\PasswordForgot;
use Illuminate\Http\Request;

class PasswordForgotController extends Controller
{
    /**
     * Display user login view
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {
        return view('auth.password-forgot');
    }

    /**
     * Handle login request
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function handle(PasswordForgot $passwordForgot, Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $data = $passwordForgot($request ->email);

        return back() ->with(['message' => $data]);
    }
}
