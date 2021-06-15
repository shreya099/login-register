<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use Auth;
use App\cart;
use Session;
use Socialite;
use app\users_verify;
use Exception;
use Mail;




class UserController extends Controller
{
    // //
    //  protected $redirectTo = '/front';

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
        //         $token = Str::random(64);
  
        // users_verify::create([
        //       'user_id' => $d->id, 
        //       'token' => $token

        //     ]);
        //  echo($d->id);
  
        // Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request){
        //       $message->to($request->email);
        //       $message->subject('Email Verification Mail');
        //   });
         
        
    

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
   
    // public function __construct() {
    //     $this->middleware('guest')->except('logout');
    // }

    // public function redirectToGoogle() {
    //     return Socialite::driver('google')->stateless()->redirect();
    // }
    // public function handleGoogleCallback() {
    //     try {
    //         $user = Socialite::driver('google')->stateless()->user();
    //         $finduser = User::where('google_id', $user->id)->first();
    //         if ($finduser) {
    //             Auth::login($finduser);
    //             return redirect('/home');
    //         } else {
    //             $newUser = User::create(['name' => $user->name, 'email' => $user->email, 'google_id' => $user->id]);
    //             Auth::login($newUser);
    //             return redirect()->back();
    //         }
    //     }
    //     catch(Exception $e) {
    //         return redirect('auth/google');
    //     }
    // }
    //  public function verifyAccount($token)
    // {
    //     $verifyUser = users_verify::where('token', $token)->first();
  
    //     $message = 'Sorry your email cannot be identified.';
  
    //     if(!is_null($verifyUser) ){
    //         $user = $verifyUser->user;
              
    //         if(!$user->is_email_verified) {
    //             $verifyUser->user->is_email_verified = 1;
    //             $verifyUser->user->save();
    //             $message = "Your e-mail is verified. You can now login.";
    //         } else {
    //             $message = "Your e-mail is already verified. You can now login.";
    //         }
    //     }
  
    //   return redirect()->route('user_login')->with('message', $message);
    // }

    public function registerusers(Request $r)
        {    $data=$r->all();
              $user = new User;
                $user -> name = $data['name'];
                $user -> email = $data['email'];
                $user -> password = bcrypt($data['pass']);
                $user -> status = 0;
                $user->save();

               // Email Verification
                $email = $data['email'];
                $messageData=[
                    'email' => $data['email'],
                    'name' => $data['name'],
                    'code' => base64_encode($data['email'])
                ];
                Mail::send('front.email_verify',$messageData,function($message) use($email){
                    $message->to($email)->subject('Confirm your Email Account ');
                  });
    return redirect()->back()->with('message','Mail has been sent to your registered Email! Kindly verify your account.') ;
                return redirect('cart');                  
        }
  Public function confirmAccount($email)
{ 
 
     $email = base64_decode($email);  // Check EMaill in database
        $userCount = User::where('email',$email)->count();
        if($userCount>0){
            // User Email already activated
            $userDetails = User::where('email',$email)->first();
            if($userDetails->status == 1){
                // $message= "Your Email is already activated. please login.";
                return redirect('user_login')->with('message','Your Account is already activated. please login.');
            }else{
                User::where('email',$email)->update(['status' =>1]);
                return redirect('user_login')->with('message','Account Activated Successfully. kindly login!');
     }
        }else{
            abort(404);
        }

}  






}

 

