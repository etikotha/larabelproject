<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pdfbook;
use Illuminate\Support\Facades\Storage;

class Pdfbookview extends Controller
{
    public function upload()
    {
    	return view('upload');
    }

    public function pdfstore(Request $request)
    {

    	$files=$request->file('file');
    	foreach ($files as $file) {
    		pdfbook::create([
    			'title' => $file->getClientOriginalname(),
    			'path' => $file->store('public/storage')
    		]);
    	}
    	

    	session()->flash('Message','Pdf Book File upload successfully');
    	return back();
    }

    public function pdfview()
    {
    	$pdfs=pdfbook::orderBy('created_at','DESC')->paginate(10);
    	return view('pdfbookview',compact('pdfs'));
    }

    public function show($id)
    {
    	$download=pdfbook::find($id);
    	return Storage::download($download->path,$download->title);
    }
}
