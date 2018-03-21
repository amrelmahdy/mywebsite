<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;
use Config;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $redirectTo = '/admin';

    protected $guard = 'admins';


    
   /* protected function guard(){
        return Auth::guard('admin');
    }*/

    public function __construct()
    {
        Config::set('auth.defaults.passwords', 'admins');
        $this->middleware('guest');
    }
}
