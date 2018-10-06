<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Role;
use App\Permission;


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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'dob' => 'required',
            'role' => 'required',
            'terms' => 'required',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'dob' => date('Y-m-d',strtotime($data['dob'])),
            'role' => $data['role'],
            'terms' => $data['terms'],
        ]);


        $this->syncPermissions($data, $user);

        return $user;


    }

    private function syncPermissions(array $data, $user)
    {
        // Get the submitted roles
        // echo "<pre>";
        // print_r($data);
        // print_r($user);
        //exit;
        $roles = isset($data['role']) ? $data['role'] : [];
        $permissions = isset($data['permissions']) ? $data['permissions'] : [];
        
        // Get the roles
        //$roles = Role::find($roles);
        $roles = Role::where('name','=',$roles)->first();

        
        //  echo '<pre>';
        // // print_r($user->toArray());
        // print_r($roles->toArray());
        // print_r($permissions);
        //  exit;

        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            //echo 'ss';exit;
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            //echo 'ee';exit;
            // handle permissions
            $user->syncPermissions($permissions);
        }
       // exit;

        $user->syncRoles($roles);

        // echo '<pre>';
        // print_r($user->toArray());
        // exit;

        return $user;
    }
}


