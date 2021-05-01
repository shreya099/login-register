<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\category;
use Validator,Redirect,Response;

class DishController extends Controller
{
    //
    public function index()
    {
    	$d=category::all();

         $q=dish::all();
          $d1=count($d);
          $q1=count($q);
         
    	return view('admin.dish',compact('d','q1','q','d1'));
    }
     public function insertdata(Request $r)
    {
    	$this->validate($r,[
       "dname"=>"required",
       "dimg"=>"required",
       "i"=>"required",
       "dp"=>"required",
       "dq"=>"required",
       "categorie_id"=>"required"
    ]);
    	$file=$r->file('dimg');
    	
    	$filename = 'image'. time().'.'.$r->dimg->extension();
    	$file->move("upload/",$filename);
      $d=new dish;
      $d->dish_name=$r->dname;
       $d->dish_des=$r->ddes;
			       $d->dish_status=$r->i;
			        $d->dish_price=$r->dp;
			         $d->dish_quantity=$r->dq;
			         $d->categorie_id=$r->categorie_id;
			         $d->dish_img=$filename;
			          $d->save();
         if($d)
    return Redirect::back()->with('message','inserted');
    
    }
      public function delete($id)
    {
    	$d=dish::find($id);
    	$delete=$d->delete();
    	if($delete)
    		return redirect('admin/dish');
    }
       public function edit($id)
    { $d=dish::find($id);
    	$d1=category::all();
    	return view('admin.dish_edit',compact('d','d1'));
    	
    }
      public function update(Request $r)
    {
    //  $d=Student::find($r->id);
    // $d->name=$r->name;
       
    //     $d->save();
        if($r->hasFile('dimg'))
        {
         $file=$r->file('dimg');
        
        $filename = 'image'. time().'.'.$r->dimg->extension();
        $file->move("upload/",$filename);
        $d=dish::find($r->id);
         $d->dish_name=$r->dname;
       $d->dish_des=$r->ddes;
			       $d->dish_status=$r->i;
			        $d->dish_price=$r->dp;
			         $d->dish_quantity=$r->dq;
			         $d->categorie_id=$r->categorie_id;
			         $d->dish_img=$filename;
        $d->save();
        if($d){
        return redirect('admin/dish');
    }
        }
        else{  $d=dish::find($r->id);
         $d->dish_name=$r->dname;
       $d->dish_des=$r->ddes;
			       $d->dish_status=$r->i;
			        $d->dish_price=$r->dp;
			         $d->dish_quantity=$r->dq;
			         $d->categorie_id=$r->categorie_id;
			       
        $d->save();

     if($d)
        return redirect('admin/dish');
    }}
}
					