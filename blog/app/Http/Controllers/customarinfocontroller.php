<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customarinfo;
use Session;

class customarinfocontroller extends Controller
{
      public function customarinfo()
    {
    	return view('customarinfo');
    }
     public function savecustomarinfo(Request $request)
    {
    	

    	$customarinfo=new customarinfo;
    	$customarinfo->book_name=$request->book_name;
    	$customarinfo->author_name=$request->author_name;
       // $addbook->number_of_page=$request->number_of_page;
    	$customarinfo->book_details=$request->book_details;
       
    	$customarinfo->save();
    	Session::flash('Message','New customarinfo add successfully');

    	return back();

    }
}


 /**public function saveorder(Request $request)
    {
    	$orderbook=new orderbook;
    	$orderbook->name=$request->name;
        $orderbook->phone_number=$request->phone_number;
        $orderbook->address=$request->address;
        $orderbook->book_name=$request->book_name;
    	$orderbook->book_details=$request->book_details;
    	$orderbook->save();
    	Session::flash('Message','orderbook  successfully');

    	return back();

    }*/
