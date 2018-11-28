<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Session;

class AddbookController extends Controller
{
    public function addbook()
    {
    	return view('addbook');
    }

    public function savebook(Request $request)
    {
    	$addbook=new Book;
    	$addbook->book_name=$request->book_name;
    	$addbook->author_name=$request->author_name;
       // $addbook->number_of_page=$request->number_of_page;
    	$addbook->book_details=$request->book_details;
       
    	$addbook->save();
    	Session::flash('Message','New book add successfully');

    	return back();

    }
}
