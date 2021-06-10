<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\cart;
use Session;

class UserController extends Controller
{
    //
    public function user()
    {
    	# code...
    	return view('front.user.user_r');
    }
    
    public function userinsert( Request $r)
    {
    	//print_r($r->all());
    	$d=$r->all();
    	$user_count=User::where('email',$d['email'])->count();
    	if($user_count>0)
    	{
    		return redirect()->back();
    	}
    	else
    	{ $user=new user;
    		$user->name = $d['name'];
				$user->email = $d['email'];
				$user->password = bcrypt($d['pass']);
               $user->save();
               return redirect('user_login');
    	}

    }
     public function userlogin()
    {
    	# code...
    	return view('front.user.user_login');
    }
    public function logininsert(Request $r)
    {
    	# code...
    	//print_r($r->all());
    	 $session_id=Session::getId();
    	// print_r($r->all());

    	$d=$r->all();
        $role_type=User::where('email',$d['email'])->first();
        
    	if(Auth::attempt(['email'=>$d['email'],'password'=>$d['password'],'role'=>$d['role']]))
    	{   
            if($role_type->role==1)
            {
                Session::put('front_session',$d['email']);
            cart::where('session_id',$session_id)->update(['user_email'=>$d['email']]);
    		return redirect('cart');
            }
            elseif($role_type->role==0)
            {
                return redirect('admin/dashboard');
            }

    	}
    	else
    	{
    		return redirect()->back();
    	}

    }
    public function logout1()
    {
        Auth::logout();
        return redirect('front');
    }
}
