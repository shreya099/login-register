<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;
use Validator,Redirect,Response;

class DeliveryController extends Controller
{
    //
    public function index()
    {
    	$d=delivery::all();
    
    	return view('admin.delivery',compact('d'));
    
    }
    public function submitdata(Request $r)
    { $this->validate($r,[
       "name"=>"required",
       "num"=>"required",
       "date"=>"required",
       "i"=>"required",
       "password"=>"required"
    ]);
    $d=new delivery;
    $d->name=$r->name;
    $d->mobile_no=$r->num;
    $d->status=$r->i;
    $d->date_of_joining=$r->date;
    $d->password=$r->password;
    $d->save();
    if($d)
    return Redirect::back()->with('message','inserted');
    
    }
    public function delete($id)
    {
    	$d=delivery::find($id);
    	$delete=$d->delete();
    	if($delete)
    		return redirect('admin/delivery');
    }
     public function edit($id)
    { $d=delivery::find($id);
    	return view('admin.d_edit',compact('d'));
    	
    }
    public function update(Request $r)
    {
    	$d=delivery::find($r->id);
        $d->name=$r->name;
        $d->mobile_no=$r->num;
        $d->status=$r->i;
     
        $d->save();

     if($d)
        return redirect('admin/delivery');
    }
}
