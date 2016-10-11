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







Route::get('/', function()
{
	return View::make('login');
});


 // Route::get ('debug', function()
 // {
 // 	echo  Auth::user()->email;
 // 	echo Auth::check();
 // 	exit();
 // });

Route::get('index', function()
{
 if (Auth::check())
		{
			return View::make('index');
		}
	
	else{
		 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
	}
});




Route::get('widget', function()
{
 if (Auth::check())
		{
			return View::make('widget');
		}
	
	else{
		 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
	}
});

Route::get('chart', function()
{
 if (Auth::check())
		{
			return View::make('charts');
		}
	
	else{
		 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
	}
});





Route::get('form-transaksi', function()
{
 if (Auth::check())
		{
			return View::make('transaksi');
		}
	
	else{
		 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
	}
});

Route::get('list-transaksi', function()
{
 if (Auth::check())
		{
			return View::make('ListTransaksi');
		}
	
	else{
		 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
	}
});

	
//Route::get('input', array('uses'=> 'InputController@create'));

Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');
Route::get('logout', 'UserController@logout');
Route::get('register', 'UserController@register'); 
Route::post('store', 'UserController@store');


//Laporan
Route::get('testing',array('uses' => 'TestingController@index'));

	



Route::get('laporan', function(){

	if (Auth::check())
		{
			$laporan = Laporan::all();
	 		return View::make('listdata')->with('datalaporan', $laporan);
		}
	
	else{
		 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
	}
});

Route::get('laporan-input', function()
{

	if (Auth::check())
		{
			return View::make('form');
		}
	
	else{
		 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
	}
 
});


Route::get('laporan/search', 'LaporanController@search');
Route::post('laporan/insert', 'LaporanController@store');
Route::get('laporan/edit/{id}', 'LaporanController@edit');
Route::post('laporan/update', 'LaporanController@update');
Route::get('laporan/delete/{id}', 'LaporanController@delete');

Route::get('export', array('uses' => 'LaporanController@export', 'as' => 'ExportLaporan'));
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


//akun


Route::get('formakun', function()
{

	if (Auth::check())
		{
			return View::make('akun');
		}
	
	else{
		 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
	}
 
});


Route::get('list-akun', function(){

	if (Auth::check())
		{
			$akun = Akun::all();
	 		return View::make('ListAkun')->with('listakun', $akun);
		}
	
	else{
		 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
	}
});

Route::post('akun/insert', 'AkunController@store');
Route::get('akun/edit/{id_akun}', 'AkunController@edit');
Route::post('akun/update', 'AkunController@update');
Route::get('akun/delete/{id}', 'AkunController@delete');

Route::get('export-akun', array('uses' => 'AkunController@export', 'as' => 'ExportAkun'));

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