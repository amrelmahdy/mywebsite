<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Auth;
use Config;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    public function __construct()
    { 
        Config::set("auth.defaults.passwords","admins"); // Change default table to admins instead of defaults 
        $this->middleware('guest');
    }
}
