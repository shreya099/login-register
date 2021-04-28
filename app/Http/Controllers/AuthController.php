<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
 
class AuthController extends Controller
{
 
    public function index()
    {
        return view('login');
    }  
 
    public function registration()
    {
        return view('registration');
    }
     
    public function submitLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin/dashboard');
        }
        return Redirect::to("/")->withSuccess('Opps! You have entered invalid credentials');
    }
 
    public function submitRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required|regex:/^[\pL\s\-]+$/u',
        'email' => 'required|email:rfc,dns|unique:users',
        'password' => 'required|min:8',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("/")->with('ok','Great! You have Successfully logged in');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('admin/dashboard');
      }
       return Redirect::to("/")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}