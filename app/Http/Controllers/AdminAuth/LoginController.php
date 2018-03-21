<?php
namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

Class LoginController extends Controller{

	use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    protected function guard(){
    	return Auth::guard('admin');
    }

    public function showLoginForm(){
    	// Check If Authinticated Or Not
    	if(Auth::guard('admin')->check()){
    		return redirect()->route('admin-home');
    	}
    	return view('admin.auth.login');
    }

    public function logout(){
    	Auth::guard('admin')->logout();
    	return redirect('admin/login');
    }
	
}