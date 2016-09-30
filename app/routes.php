<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('index', function()
{
 return View::make('index');
});

Route::get('input', function()
{
 return View::make('form');
});


Route::get('widget', function()
{
 return View::make('widget');
});

Route::get('chart', function()
{
 return View::make('charts');
});

Route::get('form-transaksi', function()
{
 return View::make('transaksi');
});

Route::get('list-transaksi', function()
{
 return View::make('ListTransaksi');
});

//Route::get('input', array('uses'=> 'InputController@create'));

Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');
Route::get('logout', 'UserController@logout');
Route::get('register', 'UserController@register'); 
Route::post('store', 'UserController@store');


//Laporan
Route::get('laporan', function(){
	 $laporan = Laporan::all();
	 return View::make('listdata')->with('datalaporan', $laporan);

});


Route::post('laporan/insert', 'LaporanController@store');
Route::get('laporan/edit/{id}', 'LaporanController@edit');
Route::post('laporan/update', 'LaporanController@update');
Route::get('laporan/delete/{id}', 'LaporanController@delete');


//

//transaksi 



Route::get('ListTransaksi', array('as' => 'show', 'uses' => 'InputTransaksiController@show'));
Route::post('tambah', 'InputTransaksiController@store');
Route::get('edit/{id}', array('as' => 'edit', 'uses' => 'InputTransaksiController@edit'));
Route::put('edit/{id}', array('as' => 'update', 'uses' => 'InputTransaksiController@update'));
Route::get('delete/{id}', array('as' => 'delete', 'uses' => 'InputTransaksiController@delete'));

Route::get('input_data_transaksi', function()
{
 return View::make('transaksi');
});

//
//sentry

// Route::get('dashboard', function()
// {
//  return View::make('index');
// });

// Route::get('/', array('before' => 'members_auth', 'uses' => 'LoginController@dashboard'));

// Route::get('loginsentry', 'LoginController@showLogin');

// Route::post('/login', 'LoginController@storeLogin');

// Route::get('registersentry', 'LoginController@register');

// Route::get('/logout', 'LoginController@getLogout');

// Route::post('/register', 'LoginController@storeRegister');

// Route::get('/register/{userId}/activate/{activationCode}', 'LoginController@registerActivate');

// Route::get('/forgotpassword', 'LoginController@showForgotpassword');

// Route::post('/forgotpassword', 'LoginController@storeForgotpassword');

// Route::get('/newpassword', 'LoginController@showNewPassword');

// Route::post('/newpassword', 'LoginController@storeNewPassword');

// Route::get('/social/{provider}/{action?}', array("as" => "loginWith", "uses" => "LoginController@loginWithSocial"));
// //
