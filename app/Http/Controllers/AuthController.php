<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use App\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
 
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
       
        return Redirect::to("/")->with('o','Great! You have Successfully logged in');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        $d=DB::table('categories')->count();
        $d1=DB::table('dishes')->count();
        $d2=DB::table('users')->count();
        return view('admin/dashboard1',compact('d','d1','d2'));
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