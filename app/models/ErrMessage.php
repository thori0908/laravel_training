<?php

class ErrMessage{
    private $errMessages = array(
            "lastname"   => "", "firstname"   => "", 
            "gender"     => "", "postcode"    => "", 
            "prefecture" => "", "mailaddress" => "", 
            "hobby" => ""
    );
                   
    private $rules = array(
            'lastname'       => 'required|max:50|zenkaku', 
            'firstname'      => 'required|max:50|zenkaku',
            'gender'         => 'required',
            'postcodeFirst'  => 'required|digits:3', 
            'postcodeSecond' => 'required|digits:4',
            'pref_id'        => 'required',
            'mailaddress'    => 'required|email'
    );

    private $messages = array(
            'lastname.required'  => '姓を入力して下さい',
            'lastname.max'       => '姓は50文字以内で入力してください',
            'lastname.zenkaku'   => '姓全角で入力してください',
            'firstname.required' => '名を入力して下さい',
            'firstname.max'      => '名は50文字以内で入力してください',
            'firstname.zenkaku'   => '姓全角で入力してください',
            'gender.required'    => '性別を選択して下さい',
            'postcodeFirst.required'  => '郵便番号を入力して下さい', 
            'postcodeFirst.digits'    => '郵便番号を正しく入力してください', 
            'postcodeSecond.required' => '郵便番号を入力して下さい', 
            'postcodeSecond.digits'   => '郵便番号を正しく入力してください', 
            'postcodeSecond.numeric'  => '郵便番号を正しく入力してください', 
            'pref_id'              => '',
            'mailaddress.required' => 'メールアドレスを入力してください。',
            'mailaddress.email'    => 'メールアドレスを正しく入力してください。'
    );

    public function getErrLastname($user) {
        $val = Validator::make($user, $this->rules, $this->messages);
        return $val;
    }

  //  public function __construct($user_array) { 
  //      if (empty($user_array["lastname"])) {
  //          $this->errMessages["lastname"] = "姓を入力して下さい．";
  //      } else {
  //          if (mb_strlen($user_array["lastname"], "UTF-8") >= 50) { 
  //              $this->errMessages["lastname"] = "姓は50文字以内で入力してください。";
  //          }
  //          if (!preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u", $user_array["lastname"])) { 
  //              $this->errMessages["lastname"] = "全角で入力してください。";
  //          }
  //      }
  //      
  //      if (empty($user_array["firstname"])) {
  //          $this->errMessages["firstname"] = "名を入力して下さい．";
  //      } else {
  //          if (mb_strlen($user_array["firstname"], "UTF-8") >= 50) { 
  //              $this->errMessages["firstname"] = "姓は50文字以内で入力してください。";
  //          }
  //          if (!preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u", $user_array["firstname"])) { 
  //              $this->errMessages["firstname"] = "全角で入力してください。";
  //          }
  //      }

  //      if (empty($user_array["gender"])) {
  //          $this->errMessages["gender"] = "性別を選択して下さい．";
  //      }

  //      if (empty($user_array["postcodeFirst"])) {
  //          $this->errMessages["postcode"] = "郵便番号を入力してください．";
  //      } else {
  //          if (!preg_match("/^[0-9]{3}+$/", $user_array["postcodeFirst"])) { 
  //              $this->errMessages["postcode"] = "郵便番号を正しく入力してください．";
  //          }
  //      }

  //      if (empty($user_array["postcodeSecond"])) {
  //          $this->errMessages["postcode"] = "郵便番号を入力してください．";
  //      } else {
  //          if (!preg_match("/^[0-9]{4}+$/", $user_array["postcodeSecond"])) { 
  //              $this->errMessages["postcode"] = "郵便番号を正しく入力してください．";
  //          }
  //      }

  //      if ($user_array["prefecture"] == "--") {
  //          $this->errMessages["prefecture"] = "都道府県を選択してください．";
  //      }

  //      if (empty($user_array["mailaddress"])) { 
  //          $this->errMessages["mailaddress"] = "メールアドレスを入力してください．";
  //      } else {
  //          if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $user_array["mailaddress"])) {
  //              $this->errMessages["mailaddress"] = "メールアドレスを正しく入力してください。";
  //          }
  //      }

  //      if (!empty($user_array["hobbyOther"]) && empty($user_array["hobbyOtherText"])) {
  //          $this->errMessages["hobby"] = "その他の詳細を入力してください．";
  //      }
  //      
  //  }

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
	//protected $hidden = array('password', 'remember_token');

}
