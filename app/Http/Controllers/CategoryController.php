<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Validator,Redirect,Response;

class CategoryController extends Controller
{
    //
    public function index()
    {
    	# code... 
    	$d=category::all();
    
    	return view('admin.category',compact('d'));
    }
     public function submitdata(Request $r)
    {
    	# code...
    	$this->validate($r,[
       "title"=>"required",
       "img"=>"required",
       "i"=>"required"
    ]);
    	$file=$r->file('img');
    	
    	$filename = 'image'. time().'.'.$r->img->extension();
    	$file->move("upload/",$filename);
        $d=new category;
        $d->title=$r->title;
        $d->img=$filename;
        $d->status=$r->i;
        $d->save();
         if($d)
    return Redirect::back()->with('message','inserted');
    
        

    	
    }
    public function delete($id)
    {
    	$d=category::find($id);
    	$delete=$d->delete();
    	if($delete)
    		return redirect('admin/category');
    }
   public function edit($id)
    { $d=category::find($id);
    	return view('admin.edit',compact('d'));
    	
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
        $d=category::find($r->id);
        $d->title=$r->title;
        $d->img=$filename;
        $d->status=$r->i;
        $d->save();
        if($d){
        return redirect('admin/category');
    }
        }
        else{  $d=category::find($r->id);
        $d->title=$r->title;
        $d->status=$r->i;
     
        $d->save();

     if($d)
        return redirect('admin/category');
    }}

}
