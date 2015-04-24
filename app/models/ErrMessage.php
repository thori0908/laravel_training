<?php

class ErrMessage
{
    private $rules = array(
            'lastname'       => 'required|max:50|zenkaku', 
            'firstname'      => 'required|max:50|zenkaku',
            'gender'         => 'required',
            'postcodeFirst'  => 'required|digits:3', 
            'postcodeSecond' => 'required|digits:4',
            'pref_id'        => 'required|prefcheck',
            'mailaddress'    => 'required|email',
            'hobbyOtherText' => 'required_with:hobbyOther'
    );

    private $messages = array(
            'required'          => ':attributeを入力して下さい',
            'lastname.max'      => '姓を50文字以内で入力して下さい',
            'lastname.zenkaku'  => '姓を全角で入力して下さい',
            'firstname.max'     => '名を50文字以内で入力して下さい',
            'firstname.zenkaku' => '名を全角で入力して下さい',
            'gender.required'   => '性別を選択して下さい',
            'postcodeFirst.digits'  => '郵便番号を正しく入力して下さい', 
            'postcodeSecond.digits' => '郵便番号を正しく入力して下さい', 
            'pref_id.required'      => '都道府県を選択してください',
            'pref_id.prefcheck'     => '都道府県を選択してください',
            'mailaddress.email'     => 'メールアドレスを正しく入力して下さい。',
            'hobbyOtherText.required_with'    => 'その他の詳細を入力して下さい．'
    );

    private $names = array(
            'lastname'       => '姓', 
            'firstname'      => '名',
            'postcodeFirst'  => '郵便番号', 
            'postcodeSecond' => '郵便番号',
            'mailaddress'    => 'メールアドレス',
    );

    public function getErrMessages($user) {
        $val = Validator::make($user, $this->rules, $this->messages);
        $val -> setAttributeNames($this->names);
        return $val;
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
	//protected $hidden = array('password', 'remember_token');

}
