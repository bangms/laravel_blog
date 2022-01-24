<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
   protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Defulat login identify colum change.
     *
     * @return void
     */
    public function username()
    {
        return 'login_id';
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string|alpha_num|min:6|max:255',
            'password' => ['required', 'string', 'regex:/^(?=.*[a-z0-9-]).{4,255}$/', 'min:4', 'max:255'],
            // 'password' => ['required', 'string', 'regex:/^(?=.*[a-zA-Z])((?=.*\d)|(?=.*\W)).{6,255}$/', 'min:6', 'max:255'], // 영문, 숫자or특수문자 조합
        ]);
    }
}
