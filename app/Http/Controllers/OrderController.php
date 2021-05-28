<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dishorder;

class OrderController extends Controller
{
    //
    public function index()
    {  $d=dishorder::orderBy('id','desc')->get();
        $i=1;
        return view('admin.allorder',compact('d','i'));
    }
}
