<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

    protected $fillable = array('lastname',       'firstname',  'gender',      'postcodeFirst', 
                                'postcodeSecond', 'prefecture', 'mailaddress', 'other', 
                                'opinion',        'hobbyMusic', 'hobbyMovie',  'hobbyOther', 'hobbyOtherText');

    public function getFullname() {
        return sprintf('%s %s', $this->lastname, $this->firstname);
    }

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
}
