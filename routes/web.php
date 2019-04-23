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
    return view('gmaps');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('qr-code-g', function () {
  \QrCode::size(500)
            ->format('png')
            ->generate('vimleshsingh', public_path('images/qrcode.png'));
    
  return view('qrCode');
    
});

Route::get('/qrcode', 'QrController@make');
Route::get('/vcard', 'QrController@vcard');
///...barcode generate.....
Route::get('barcode', 'HomeController@barcode');