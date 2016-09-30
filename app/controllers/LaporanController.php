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

		
		$laporan = new Laporan();
		$laporan->no_bukti = Input::get('nobukti');
		$laporan->tanggal = Input::get('tanggal');
		$laporan->keterangan  = Input::get('keterangan');
		$laporan->no_perk    = Input::get('noperk');
		$laporan->kredit  = Input::get('kredit');
		$laporan->debet = Input::get('debet');
		
		$laporan->save();

		 return Redirect::to('laporan');
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
		//
		$laporan = Laporan::find($id);
  		return View::make('editlaporan')->with('laporan', $laporan);

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
		$laporan->keterangan  = Input::get('keterangan');
		$laporan->no_perk    = Input::get('noperk');
		$laporan->kredit  = Input::get('kredit');
		$laporan->debet = Input::get('debet');
		$laporan->save();
		return Redirect::to('laporan');
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
	  $laporan = Laporan::find($id);
      $laporan->delete();
      return Redirect::to('laporan');
	}


}
