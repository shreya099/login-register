<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\banner;
use App\about;
use App\category;
use App\dish;
use DB;



class FrontController extends Controller
{
    //
    public function index()
    {
    	$d=banner::all();
    	$d1=about::all();
    	$d2=category::all();
    	
    
    	
    	return view('front.index',compact('d','d1','d2'));
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
}
