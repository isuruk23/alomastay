<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    // protected $redirectTo = '/dashboard';
    protected function authenticated($request, $user)
    {
        return match ($user->role) {
            'admin' => redirect()->route('admin.dashboard'),
            'user' => redirect()->route('user.dashboard'),
            default => redirect('/'),
        };
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
}
