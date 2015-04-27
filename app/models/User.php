<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent implements UserInterface, RemindableInterface 
{

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

    protected $fillable = array('lastname',       'firstname',  'gender',      'postcodeFirst', 
                                'postcodeSecond', 'pref_id',    'mailaddress', 'other', 
                                'opinion',        'hobbyMusic', 'hobbyMovie',  'hobbyOther', 'hobbyOtherText');
    
    public static function escapeFormValue($input) {
        $modifiedValue = array();
        foreach($input as $key=>$value) {
            $formValue = $input;
            if (!empty($formValue[$key])) {
                $formValue[$key] = mb_ereg_replace('^[\s　]*(.*?)[\s　]*$', '\1', $formValue[$key]);//全角空白置換 
                $modifiedValue[$key] = trim($formValue[$key], " ");//空白処理 
                $modifiedValue[$key] = htmlspecialchars($modifiedValue[$key]);  //htmlエスケープ処理
            }
        }
        return $modifiedValue;
    }

    public static function checkHobbyOther ($input) {
        if (!empty($input['hobbyOtherText'])) {
            $input['hobbyOther'] = 'その他';  
        }
    return $input;
    }

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
