<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\show_order_list;
use Session;

class showOrderlistcontroller extends Controller
{
     public function showOrderlist()
    {
    	return view('showorderlist');
    }

    public function saveshoworder(Request $request)
    {
    	$showOrderlist=new show_order_list;
    	$showOrderlist->name=$request->customer_name;
        $showOrderlist->Book_name=$request->Book_name;
        $showOrderlist->Address=$request->address;
        $showOrderlist->Date=$request->Date;
    	
    	$showOrderlist->save();
    	Session::flash('Message','show Order list  ');

    	return back();

    }
}

