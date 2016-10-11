<?php
 

class LaporanController extends \BaseController {

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
			$laporan = new Laporan();
			$laporan->no_bukti = Input::get('nobukti');
			$laporan->tanggal = Input::get('tanggal');
			$laporan->no_perk    = Input::get('noperk');
			$laporan->kode_akun    = Input::get('akun');
			$laporan->kredit  = Input::get('kredit');
			$laporan->debet = Input::get('debet');
			$laporan->keterangan  = Input::get('keterangan');
			
			$laporan->save();

			 return Redirect::to('laporan')->with('pesan_simpan', 'Data Berhasil Disimpan');
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
	public function search()
	{
	$searchBy = Input::get('searchBy');
    $kode_akun = Input::get('katakunci');
    $searchResult = DB::table('laporan_kas_harian')->where($searchBy, 'LIKE', '%'.$kode_akun.'%')->get();

    return View::make('listpencariandata')
            ->with('searchBy', $searchBy)
            ->with('kode_akun', $kode_akun)
            ->with('searchResult', $searchResult);
        }


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{


		//
		if (Auth::check())
		{
		$laporan = Laporan::find($id);
  		return View::make('editlaporan')->with('laporan', $laporan);
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
		
  		$id   = Input::get('id');
  		$laporan = Laporan::find($id);

  		$laporan->no_bukti = Input::get('nobukti');
		$laporan->tanggal = Input::get('tanggal');
		$laporan->no_perk    = Input::get('noperk');
		$laporan->kode_akun    = Input::get('akun');
		$laporan->kredit  = Input::get('kredit');
		$laporan->debet = Input::get('debet');
		$laporan->keterangan  = Input::get('keterangan');
		$laporan->save();
		return Redirect::to('laporan')->with('pesan_update', 'Data Update Berhasil');


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{

	if (Auth::check())
	{
	  $laporan = Laporan::find($id);
      $laporan->delete();
      return Redirect::to('laporan')->with('pesan_hapus', 'Data Berhasil dihapus');
      	}
  		else{
				 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
			}
	}

	public function export(){

		
	if (Auth::check())
	{
		  $laporan = Laporan::select('no_bukti', 'tanggal', 'keterangan','no_perk','kredit','debet')->get();
		  Excel::create('Laporan Kas Harian', function($excel) use($laporan) {
		    $excel->sheet('Sheet 1', function($sheet) use($laporan) {
		        $sheet->fromArray($laporan);
		    });
		})->export('xlsx');
	}
  		else{
				 return Redirect::to('login')->with('belum_login', 'Anda Harus Login');
			}

		
	}


}
