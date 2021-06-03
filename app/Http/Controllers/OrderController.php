<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dishorder;
use Validator,Redirect,Response;

class OrderController extends Controller
{
    //
    public function index()
    {  $d=dishorder::orderBy('id','desc')->get();
        $i=1;
        return view('admin.allorder',compact('d','i'));
    }
    public function submit(Request $r)
    {
         $d=new dishorder;
         $info = dishorder::where([
    ['id', '=' ,$r->id],
    ['user_id', '=', $r->user_id],
    ['user_email', '=', $r->user_email]
    
])->first();
         $info->order_status=$r->orders;
       
      
     if($info->save())
    return redirect()->back();
    }
     public function submit1(Request $r)
    {
         $d=new dishorder;
         $info = dishorder::where([
    ['id', '=' ,$r->id],
    ['user_id', '=', $r->user_id],
    ['user_email', '=', $r->user_email]
    
])->first();
         $info->payment_status=$r->pay;
       
      
     if($info->save())
    return redirect()->back();
    }
}
