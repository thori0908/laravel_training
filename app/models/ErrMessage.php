<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

clasr ErrMessage extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    private $errMessages = array("lastname" => "", "firstname" => "", "gender" => "", "postcode" => "", 
                                 "prefecture" => "", "mailaddress" => "", "hobby" => "");

    public function __construct($user_array) { 
        if (empty($user_array["lastname"])) {
            $this->errMessages["lastname"] = "姓を入力して下さい．";
        } else {
            if (mb_strlen($user_array["lastname"], "UTF-8") >= 50) { 
                $this->errMessages["lastname"] = "姓は50文字以内で入力してください。";
            }
            if (!preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u", $user_array["lastname"])) { 
                $this->errMessages["lastname"] = "全角で入力してください。";
            }
        }
        
        if (empty($user_array["firstname"])) {
            $this->errMessages["firstname"] = "名を入力して下さい．";
        } else {
            if (mb_strlen($user_array["firstname"], "UTF-8") >= 50) { 
                $this->errMessages["firstname"] = "姓は50文字以内で入力してください。";
            }
            if (!preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u", $user_array["firstname"])) { 
                $this->errMessages["firstname"] = "全角で入力してください。";
            }
        }

        if (empty($user_array["gender"])) {
            $this->errMessages["gender"] = "性別を選択して下さい．";
        }

        if (empty($user_array["postcodeFirst"])) {
            $this->errMessages["postcode"] = "郵便番号を入力してください．";
        } else {
            if (!preg_match("/^[0-9]{3}+$/", $user_array["postcodeFirst"])) { 
                $this->errMessages["postcode"] = "郵便番号を正しく入力してください．";
            }
        }

        if (empty($user_array["postcodeSecond"])) {
            $this->errMessages["postcode"] = "郵便番号を入力してください．";
        } else {
            if (!preg_match("/^[0-9]{4}+$/", $user_array["postcodeSecond"])) { 
                $this->errMessages["postcode"] = "郵便番号を正しく入力してください．";
            }
        }

        if ($user_array["prefecture"] == "--") {
            $this->errMessages["prefecture"] = "都道府県を選択してください．";
        }

        if (empty($user_array["mailaddress"])) { 
            $this->errMessages["mailaddress"] = "メールアドレスを入力してください．";
        } else {
            if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $user_array["mailaddress"])) {
                $this->errMessages["mailaddress"] = "メールアドレスを正しく入力してください。";
            }
        }

        if (!empty($user_array["hobbyOther"]) && empty($user_array["hobbyOtherText"])) {
            $this->errMessages["hobby"] = "その他の詳細を入力してください．";
        }
        
    }
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}