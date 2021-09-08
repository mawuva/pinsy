<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mawuekom\Passauth\Http\Requests\RegisterUserRequest;
use Mawuekom\Passauth\Services\RegisterUser;

class RegisterController extends Controller
{
    /**
     * Display user register view
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {
        return view('auth.register');
    }

    /**
     * Handle register request
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function handle(RegisterUser $registerUser, RegisterUserRequest $request)
    {
        try {
            $user = $registerUser($request ->validated());
        }

        catch (Exception $e) {
            return back() 
                    ->withErrors($e ->getMessage())
                    ->withInput();
        }
        
        Auth::login($user['data']);
        
        return redirect() ->route('home')
                          ->with($user['status'], $user['message']);
    }
}
