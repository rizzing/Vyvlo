<?php

namespace App\Http\Controllers\Auth;

use App\Marathon;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


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
      $v = Validator::make($data, [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'marathon' => 'required|integer|exists:marathons,id',
        ]);
        $v->setAttributeNames([
            'name'=>trans('customAttrName.name'),
            'last_name'=>trans('customAttrName.last_name'),
            'email'=>trans('customAttrName.email'),
            'password'=>trans('customAttrName.password'),
            'marathon'=>trans('customAttrName.marathon'),
            ]);
        return $v;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        abort(404);
        /*return User::create([
                    'name' => $data['name'],
                    'last_name' => $data['last_name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'marathon_id' => $data['marathon'],
                ]);*/
    }
    public function showRegistrationForm()
    {
        abort(404);
        /*$marathons = Marathon::select('name', 'id')->get();
        return view('auth.register',['marathons' => $marathons]);*/
    }

}
