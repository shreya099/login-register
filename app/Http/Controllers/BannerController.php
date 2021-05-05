<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Validator,Redirect,Response;
class BannerController extends Controller
{
    //
     public function index()
    {
    		# code... 
    	$d=banner::all();
    
    	return view('admin.banner',compact('d'));
    }
     public function submitdata(Request $r)
    {
    	# code...
    	$this->validate($r,[
       "title"=>"required",
       "img"=>"required"
      
    ]);
    	$file=$r->file('img');
    	
    	$filename = 'image'. time().'.'.$r->img->extension();
    	$file->move("upload/",$filename);
        $d=new banner;
        $d->title=$r->title;
        $d->img=$filename;
      
        $d->save();
         if($d)
    return Redirect::back()->with('message','inserted');
    
        

    	
    }
      public function delete($id)
    {
    	$d=banner::find($id);
    	$delete=$d->delete();
    	if($delete)
    		return redirect('admin/banner');
    }
   public function edit($id)
    { $d=banner::find($id);
    	return view('admin.banner_edit',compact('d'));
    	
    }
     public function update(Request $r)
    {
    //  $d=Student::find($r->id);
    // $d->name=$r->name;
       
    //     $d->save();
        if($r->hasFile('img'))
        {
         $file=$r->file('img');
        
        $filename = 'image'. time().'.'.$r->img->extension();
        $file->move("upload/",$filename);
        $d=banner::find($r->id);
        $d->title=$r->title;
        $d->img=$filename;
    
        $d->save();
        if($d){
        return redirect('admin/banner');
    }
        }
        else{  $d=banner::find($r->id);
        $d->title=$r->title;
     
     
        $d->save();

     if($d)
        return redirect('admin/banner');
    }}
}

