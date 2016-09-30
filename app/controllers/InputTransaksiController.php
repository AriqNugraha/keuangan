<?php

class InputTransaksiController extends \BaseController {

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
		return View::make('form');
	}
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		

		
		$transaksi = new DataTransaksi();
		$transaksi->no_bukti = Input::get('no_bukti');
		$transaksi->tanggal = Input::get('tanggal');
		$transaksi->nominal  = Input::get('nominal');
		$transaksi->tipe_transaksi = Input::get('tipe_transaksi');	
		$transaksi->save();

		return Redirect::to('ListTransaksi')->with('pesan', 'data berhasil masuk!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$datatransaksi = DataTransaksi::all();
		return View::make('ListTransaksi',compact('datatransaksi'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$datatransaksi = DataTransaksi::find($id);
		# Tampilkan view
		return View::make('editlisttransaksi', compact('datatransaksi'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			
			$update = DataTransaksi::find($id);
			$update->no_bukti		= Input::get('no_bukti');
			$update->tanggal 		= Input::get('tanggal');
			$update->nominal 		= Input::get('nominal');
			$update->tipe_transaksi = Input::get('tipe_transaksi');
			$update->save();
			# Kehalaman beranda dengan pesan sukses
			return Redirect::route('show')->withPesan('data berhasil diubah.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		# Hapus biodata berdasarkan id
		DataTransaksi::find($id)->delete();
		# Kembali kehalaman yang sama dengan pesan sukses
		return Redirect::back()->withPesan('data berhasil dihapus.');
	}


}
