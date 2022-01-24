<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
   /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }


   /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'login_id' => ['required', 'alpha_num', 'regex:/^(?=.*[a-zA-Z])((?=.*\d)).{6,255}$/', 'min:6', 'max:255','unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'regex:/^(?=.*[a-z0-9-]).{4,255}$/', 'min:4', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'alpha_num', 'regex:/^[0-9]+$/', 'min:6', 'max:25'],
        ]);
    }
    // <input type="text" class="input" name="login_id" placeholder="Id" />
    // <input type="text" class="input" name="name" placeholder="Name" />
    // <input type="password" class="input" name="password" placeholder="Password" />
    // <input type="email" class="input" name="email" placeholder="Email" />
    // <input type="text" class="input" name="phone" placeholder="Phone" />
        /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data) {
        return User::create([
            'login_id' => $data['login_id'],
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'phone' => $data['phone'],
        ]);
    }
}

