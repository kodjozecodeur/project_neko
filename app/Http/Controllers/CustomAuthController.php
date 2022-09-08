<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    /******************************************
     * REGISTER SECTION START HERE
    ****************************************** */

    function createRegisterPage()//show the registration page
    {
        return view('frontend.auth.register');
    }


    public function customRegistration(Request $request)//registration action
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email'=>'required|unique:users',
            'phone_number'=>'required',
            'location'=>'required',
            'password' => 'required',
        ]);
        $data = $request->all();
        $check = $this->create($data);

        return redirect("/login")->withSuccess('You have signed-in');
    }

    public function create(array $data)//create the new user on registration
    {
        return User::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'phone_number' => $data['phone_number'],
        'location' => $data['location'],
        'password' => Hash::make($data['password'])
        ]);
    }
    /******************************************
     * REGISTER SECTION END HERE
    ****************************************** */

    /******************************************
     * LOGIN SECTION START HERE
    ****************************************** */

    public function loginPage()
    {
        return view('frontend.auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }


    public function dashboard() {
        if(Auth::check()){
            return view('frontend.auth.dashboard');
        }
        return redirect("/login")->withSuccess('You are not allowed to access');

    }


    public function signOut() {
        Session::flush();
        Auth::logout();

    return Redirect('login');
}
