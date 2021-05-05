<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Validator,Redirect,Response;

class AboutController extends Controller
{
    //
      public function index()
    {
    		# code... 
    	$d=about::all();
    
    	return view('admin.about',compact('d'));
    }
     public function submitdata(Request $r)
    {
    	# code...
    	$this->validate($r,[
     
       "img"=>"required"
      
    ]);
    	$file=$r->file('img');
    	
    	$filename = 'image'. time().'.'.$r->img->extension();
    	$file->move("upload/",$filename);
        $d=new about;
    
        $d->img=$filename;
      
        $d->save();
         if($d)
    return Redirect::back()->with('message','inserted');
    
        

    	
    }
      public function delete($id)
    {
    	$d=about::find($id);
    	$delete=$d->delete();
    	if($delete)
    		return redirect('admin/about');
    }
   public function edit($id)
    { $d=about::find($id);
    	return view('admin.about_edit',compact('d'));
    	
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
        $d=about::find($r->id);
      
        $d->img=$filename;
    
        $d->save();
        if($d){
        return redirect('admin/about');
    }
        }
        else{  $d=about::find($r->id);
        $d->title=$r->title;
     
     
        $d->save();

     if($d)
        return redirect('admin/about');
    }}
}
