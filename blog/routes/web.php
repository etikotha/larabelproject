<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addbook','AddbookController@addbook');
Route::post('/savebook','AddbookController@savebook');

Route::get('/upload','Pdfbookview@upload');
Route::post('/pdfstore','Pdfbookview@pdfstore')->name('pdfstore');
Route::get('/pdfview','Pdfbookview@pdfview');
Route::get('show/{id}','Pdfbookview@show')->name('show');

    /**  Route::get('/orderbook','orderbookController@orderbook');
     Route::post('/saveorderbook','orderbookController@saveorderbook');*/




  Route::get('/ShowOrderlist','showOrderlistcontroller@showOrderlist');
  Route::get('/saveshoworder','showOrderlistcontroller@saveshoworder'); 


  Route::get('/showStock', function () {
    return view('showStock');
    });

  Route::get('/DueBook', function () {
    return view('DueBook');

});
   Route::get('/customarinfo', function () {
    return view('customarinfo');

});
    Route::get('/customarinfo','customarinfocontroller@customarinfo');

     Route::post('/savecustomarinfo','customarinfocontroller@savecustomarinfo');


    
   Route::get('/order','ordercontroller@order'); 
    Route::post('/saveorder','orderController@saveorder');




 // Route::get('/Bookorder','Bookordercontroller@Bookorder');   
 //Route::post('/saveBookorders','Bookordercontroller@saveBookorders');



 

  
    

