<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\banner;
use App\about;
use App\category;
use App\dish;
use App\cart;
use Validator,Redirect,Response;
use DB;
use Session;
use Auth;
use App\Dishorder;
use App\Dishitem;



class FrontController extends Controller
{
    //
    public function index()
    { $i=1;
    	$d=banner::all();
    	$d1=about::all();
    	$d2=category::all();
    	
    
    	
    	return view('front.index',compact('d','d1','d2','i'));
    }
      public function showdish($id)
    { $d=category::find($id);
    	$d1=DB::table('dishes')->where('categorie_id', '=', $d->id)->get();
    	
    
    if($d1){
    	return view('front.shop',compact('d1'));
    }
    
    }
    public function showall()
    {
    	// $d=banner::all();
    	// $d1=about::all();
     $d2=category::all();
    	
    
    	
    	return view('front.show_all',compact('d2'));
    }
    public function showdetail($id)
    {
        $d=dish::find($id);
        $d1=DB::table('add_imgs')->where('dish_id', '=', $d->id)->get();
         if($d1){
        return view('front.detail',compact('d1','d'));
    }

        
    }
   
    public function addtocart(Request $a)
    {
      
       $session_id = Session::getId();
        // print_r($session_id);
        // die;
        // echo '<pre>';
        // print_r($a->all());
          if(Auth::check())
        {
            $useremail = Auth::user()->email;
            $item = Cart::where('user_email',$useremail)->get();

       
        $data = new Cart;
        $data->user_email = $useremail;
        $data->dish_id = $a->dish_id;
        $data->dish_name = $a->dish_name;
        $data->dish_price = $a->dish_price;
        $data->dish_img = $a->dish_img;
        $data->dish_size = $a->dish_size;
        $data->dish_quantity = $a->dish_quantity;
        $data->session_id = $session_id;

        $data->save();


        if($data)
        {
            return redirect('cart');
        }
        }
       else
        {
        $data = new Cart;
        $data->dish_id = $a->dish_id;
        $data->dish_name = $a->dish_name;
        $data->dish_price = $a->dish_price;
        $data->dish_img = $a->dish_img;
        $data->dish_size = $a->dish_size;
        $data->dish_quantity = $a->dish_quantity;
        $data->session_id = $session_id;

        $data->save();


        if($data)
        {
            return redirect('cart');
        }
      }
     
        
    }
    public function cart()

    { 
        if(Auth::check())
        {
            
             $useremail=Auth::user()->email;
             
              $d1=cart::where('user_email',$useremail)->get();
              // if(cart::where('user_email','')){
              //    $session_id=Session::getId();
              //    cart::where('session_id',$session_id)->update(['user_email'=>$useremail]);
              //    $d1=cart::where('user_email',$useremail)->get();
                
              // }


        }
        else{
        $session_id=Session::getId();
        $d1=cart::where('session_id',$session_id)->get();
       
           }
     $d2=category::all();
        return view('front.cart',compact('d1','d2'));
}
    public function checkout()
    {
        # code...
        $useremail=Auth::user()->email;
          $d1=cart::where('user_email',$useremail)->get();
        return view('front.checkout',compact('d1'));
    }

    public function update_q($id,$qty)
    {
         DB::table('carts')->where('id',$id)->increment('dish_quantity',$qty);
         return redirect()->back();
    }
   
  public function placeorder(Request $r)
  {
   $d=new Dishorder;
   $d->user_id=$r->user_id;
    $d->user_email=$r->email;
     $d->name=$r->name;
      $d->address=$r->address;
       $d->city=$r->city;
        $d->country=$r->country;
         $d->phone_no=$r->phone;
          $d->pin_code=$r->pin;
           $d->payment_method=$r->payment_method;
            $d->grand_total=$r->grand_total;
            $d->save();
            $order_id=DB::getPdo()->lastInsertId();
            print_r($order_id);
           $dish_item=cart::where('user_email',$d->user_email)->get();
           foreach ($dish_item as $dish_i) {
             # code...
            $d1=new Dishitem;
            $d1->order_id=$order_id;
            $d1->user_id=0;
            $d1->dish_name=$dish_i->dish_name;
            $d1->dish_img=$dish_i->dish_img;
            $d1->dish_quantity=$dish_i->dish_quantity;
            $d1->dish_price=$dish_i->dish_price;
            $d1->save();


           }
           if($d['payment_method']=='cod')
           {
            return redirect('thanks');
           }

             }
           public function thanks()
           {
            $useremail=Auth::user()->email;
            cart::where('user_email',$useremail)->delete();
            $d=Dishorder::where('user_email',$useremail)->get();
            return view('front.thanks',compact('d'));
           }  

}
