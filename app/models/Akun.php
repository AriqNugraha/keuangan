<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Akun extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'akun';
	protected $fillable = array('id_akun','no_akun','nama_akun');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	

}
