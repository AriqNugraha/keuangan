<?php

class AkunController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		if (Auth::check())
		{
			$laporan = new Akun();	
			$laporan->no_akun       = Input::get('no_akun');
			$laporan->nama_akun     = Input::get('nama_akun');
			
			$laporan->save();

			 return Redirect::to('list-akun')->with('pesan_simpan', 'Data Berhasil Disimpan');
		}
  		else{
				 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
			}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if (Auth::check())
		{
			
		$akun = Akun::find($id);
  		return View::make('editakun')->with('akun', $akun);
  		}
  		else{
				 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
			}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		//
		$id 				= Input::get('id');
  		$akun			= Akun::find($id);
  		$akun->no_akun   = Input::get('no_akun');
		$akun->nama_akun = Input::get('nama_akun');
	
		$akun->save();
		return Redirect::to('list-akun')->with('pesan_update', 'Data Update Berhasil');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		//
		if (Auth::check())
	{
	  $akun = Akun::find($id);
      $akun->delete();
      return Redirect::to('list-akun')->with('pesan_hapus', 'Data Berhasil dihapus');
      	}
  		else{
				 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
			}
	}
public function export(){

		
	if (Auth::check())
	{
		  $akun = Akun::select('no_akun','nama_akun')->get();
		  Excel::create('List Akun', function($excel) use($akun) {
		    $excel->sheet('Sheet 1', function($sheet) use($akun) {
		        $sheet->fromArray($akun);
		    });
		})->export('xlsx');
	}
  		else{
				 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
			}

		
	}

}
