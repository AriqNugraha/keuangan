<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class DataTransaksi extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'transaksi_kas_harian';
	protected $fillable = array('no_bukti','tanggal','nominal','tipe_transaksi');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
}
