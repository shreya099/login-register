<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use DB; 
use Carbon\Carbon; 
use Mail; 

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('front.dashboard');
    }
  public function getEmail()
  {

     return view('custom.email');
  }

 public function postEmail(Request $request)
  {
    $request->validate([
        'email' => 'required|email|exists:users',
    ]);

    $token = str::random(64);

      DB::table('password_resets')->insert(
          ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      );

      Mail::send('custom.verify', ['token' => $token], function($message) use($request){
          $message->to($request->email);
          $message->subject('Reset Password Notification');
      });

      return back()->with('message', 'We have e-mailed your password reset link!');
  }
}