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
Route::get('/addpost', 'PagesController@getAddpost')->name('addpost');



Route::get('about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');

Route::get('/contact/get', [
	'uses' => 'ContactMessageController@create',
    'as'=>'contact'
]);

//AZIZ TIQDIEVVVVV
//
//
//
//
//
//
//


Route::get('/migrate', function () {
    $migrate = Artisan::call('migrate');
    echo "Migrated bratiw<br>";

});



Route::get('insert','ProductController@insertform');

Route::post('/create','ProductController@insert');

Route::post('/search', 'ProductController@search');

Route::get("/categories/{category}", [
    'uses'=>'ProductController@show_all',
    'as'=>'categories'
]);



Route::post('/rate',  'ProductController@rate')->name('rate');


Route::get("/announcement/{id}", [
    'uses'=>'ProductController@show_product',
    'as'=>'announcement'
]);




//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

Route::get('/summerhouse','PagesController@getSummerHouse');


Route::get('/sanatoriums','PagesController@getSanatoriums');

Route::get('/recreationareas','PagesController@getRecreationAreas');


Route::post('/contact/post', [
	'uses' => 'ContactMessageController@store',
	'as'   => 'contact.store'

]);
Route::get('/profile', function()
{
    return view('pages/myprofile');
});
Route::get('/','PagesController@getHome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
