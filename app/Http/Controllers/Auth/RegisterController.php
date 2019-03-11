<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

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
            'name'        => ['required', 'string', 'max:255'],
            'email'       => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'    => ['required', 'string', 'min:5'],
            'username'    => ['required','unique:users,username','max:255'],
            'phone'       => ['required','numeric'],
            'gender'      => ['required'],
            'checked'     => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if ($data['gender'] == 'male') {
          $img_address = 'img/familyTree-default-male.png';
        } else {
          $img_address = 'img/familyTree-default-female.png';
        }

        return User::create([
            'name'        => $data['name'],
            'email'       => $data['email'],
            'password'    => Hash::make($data['password']),
            'username'    => $data['username'],
            'phone'       => $data['phone'],
            'gender'      => $data['gender'],
            'user_type'   => 'guest',
            'img_address' => $img_address,
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.signup')->with(['title'=>'Sign Up | familyTree']);
    }

    public function register(Request $request)
    {
        $validation = ['message'=>'', 'success'=>false];
        $validation['message'] = $this->validator($request->all());
        if ($validation['message']->fails())  {
            $validation['message'] = $validation['message']->errors()->toArray();
        } else {
            $user = $this->create($request->all());
            Auth::login($user);
            $validation['success'] = true;
            $validation['message'] = route('home');
        }

        return response()->json($validation);
    }
}
