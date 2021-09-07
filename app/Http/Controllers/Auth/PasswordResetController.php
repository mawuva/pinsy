<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Domain\Passauth\Http\Requests\PasswordResetRequest;
use Domain\Passauth\Services\PasswordReset;
use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    /**
     * Display user login view
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {
        return view('auth.password-reset');
    }

    /**
     * Handle login request
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function handle(PasswordReset $passwordReset, PasswordResetRequest $request)
    {
        $data = $passwordReset($request ->email, $request ->token, $request ->password);

        // redirect to login with message
    }
}
