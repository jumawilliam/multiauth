<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Auth;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function login(Request $request) {
        if ($user->role == 1) {
            return redirect('/superadmin');
        } else if ($user->role== 2) {
            return redirect('/admin');
        } else if ($user->role== 3){
            return redirect('/depthead');
        } else if ($user->role== 4){
            return redirect('/staff');
        } else if ($user->role== 5){
            return redirect('/client');
        }
   }
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
        $this->middleware('guest')->except('logout');
    }
}
