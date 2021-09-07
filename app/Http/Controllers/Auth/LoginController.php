<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display user login view
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {
        return view('auth.login');
    }

    /**
     * Handle login request
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function handle()
    {
        /*try {
            $user = $loginUser($request ->validated());
        }

        catch (Exception $e) {
            return back() 
                    ->withErrors($e ->getMessage())
                    ->withInput();
        }

        Auth::login($user['data']);
        
        return redirect() ->route('home')
                          ->with($user['status'], $user['message']);*/

    }
}
