<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Validator,Redirect,Response;

class CouponController extends Controller
{
    //
    public function index()
    {  $d=coupon::all();
    
    	
    	return view('admin.coupon',compact('d'));
    }
    public function insertdata(Request $r)
    {   $this->validate($r,[
       "code"=>"required",
       "value"=>"required",
       "edate"=>"required",
       "i"=>"required",
       "minvalue"=>"required"
    ]);
    	$d=new coupon;
    	$d->coupon_code=$r->code;
    	$d->coupon_type=$r->t;
    	$d->coupon_value=$r->value;
    	$d->cart_min_value=$r->minvalue;
    	$d->coupon_status=$r->i;
    	$d->expired_on=$r->edate;
    	$d->save();
   if($d)
    return Redirect::back()->with('message','inserted');
    
    
    }
    public function delete($id){
    	$d=coupon::find($id);
    	$delete=$d->delete();
    	if($delete)
    		return redirect('admin/coupon');
    }
    public function edit($id)
    {
    	$d=coupon::find($id);
    	return view('admin.coupon_edit',compact('d'));
    }
    public function update(Request $r){
    	$d=coupon::find($r->id);
        $d->coupon_code=$r->code;
    	$d->coupon_type=$r->t;
    	$d->coupon_value=$r->value;
    	$d->cart_min_value=$r->minvalue;
    	$d->coupon_status=$r->i;
    	$d->expired_on=$r->edate;
     
        $d->save();

     if($d)
        return redirect('admin/coupon');
    }
}
		