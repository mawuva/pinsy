<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display user register view
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {
        return view('auth.login');
    }

    /**
     * Handle register request
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function handle()
    {

    }
}
