<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\order;
use Session;

class ordercontroller extends Controller
{
       public function order()
    {
    	return view('order');
    }

     public function saveorder(Request $request)
    {
    	

    	$order=new order;

    	$order->name=$request->name;
    	$order->address=$request->address;
    	$order->phone_number=$request->phone_number;
    	$order->book_name=$request->book_name;
    	$order->author_name=$request->author_name;
       // $addbook->number_of_page=$request->number_of_page;
    	$order->book_details=$request->book_details;
       
    	$order->save();
    	Session::flash('Message','New book order successfully');

    	return back();

    }
}
