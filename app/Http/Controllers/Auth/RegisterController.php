<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Role;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'ogrenci_no' => ['required', 'string', 'max:9','min:9', 'unique:users'],
            'tc' => ['required', 'string', 'max:12', 'min:11', 'unique:users'],
            'sinif' => ['required', 'integer', 'min:1','max:4'],
            'ogrenci_bolum' => ['required', 'string', 'max:255'],
            'ogrenci_fakulte' => ['required', 'string', 'max:255'],
            'telefon_no' => ['required', 'string',  'max:10','min:10'],
            'dogum' => ['required', 'date'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
         $user=User::create([
            'name' => $data['name'],
            'email'=>$data['email'],
            'ogrenci_no' => $data['ogrenci_no'],
            'tc' => $data['tc'],
            'sinif' => $data['sinif'],
            'ogrenci_fakulte' => $data['ogrenci_fakulte'],
            'ogrenci_bolum' => $data['ogrenci_bolum'],
            'telefon_no' => $data['telefon_no'],
            'dogum' => $data['dogum'],
            'password' => Hash::make($data['password']),
        ]);


       $role=Role::create([
          'email'=> $data['email'],
          'role'=>"kullanici",
        ]);

        return $user;

    }
}
