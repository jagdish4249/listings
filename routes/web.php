<?php

use Illuminate\Http\Request;

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
    return redirect()->route('listing.index');
});

Auth::routes();

Route::resource('listing', 'ListingController')->except('show','edit','update','destroy');

//not used but kept for future reference to use without vue
Route::get('/listings/search', 'ListingController@search')->name('listing.search');



