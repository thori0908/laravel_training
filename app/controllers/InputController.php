<?php

class InputController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function showInput()
    {

//        $user = Customer::make();
//        $user = new User($_SESSION);
//        $user_array = $user->toArray();
//
//        $errMessages_obj = new ErrMessage($user_array);
//        $errMessages = $errMessages_obj->getErrMessages();
//
//        // エラーメッセージ初期状態
//        if (empty($_SESSION)) { 
//            foreach ($errMessages as $key => $value) {
//                $errMessages[$key] = "";
//            }
//        }
//
        $lastname  = Input::get('lastname', '');
        $firstname = Input::get('firstname', '');
        $gender    = Input::get('gender', '');
        $postcodeFirst  = Input::get('postcodeFirst', '');
        $postcodeSecond = Input::get('postcodeSecond', '');
        $prefecture     = Input::get('prefecture', '');
        $mailaddress    = Input::get('mailaddress', '');
        $other      = Input::get('other', '');
        $opinion    = Input::get('opinion', '');
        $hobbyMusic = Input::get('hobbyMusic', '');
        $hobbyMovie = Input::get('hobbyMovie', '');
        $hobbyOther = Input::get('hobbyOther', '');
        $hobbyOtherText = Input::get('hobbyOtherText', '');

        $input_array = array();
        $input_array['lastname']  = $lastname;
        $input_array['firstname'] = $firstname;
        $input_array['gender']    = $gender;
        $input_array['postcodeFirst']  = $postcodeFirst;
        $input_array['postcodeSecond'] = $postcodeSecond;
        $input_array['prefecture']     = $prefecture;
        $input_array['mailaddress']    = $mailaddress;
        $input_array['other']      = $other;
        $input_array['opinion']    = $opinion;
        $input_array['hobbyMusic'] = $hobbyMusic;
        $input_array['hobbyMovie'] = $hobbyMovie;
        $input_array['hobbyOther'] = $hobbyOther;
        $input_array['hobbyOtherText'] = $hobbyOtherText;

        $user = new User($input_array);

        $prefectureNames = array("北海道", "青森県", "岩手県", "宮城県", "秋田県", "山形県", "福島県", "茨城県", "栃木県", "群馬県",
                                "埼玉県", "千葉県", "東京都", "神奈川県", "新潟県", "富山県", "石川県", "福井県", "山梨県", "長野県",
                                "岐阜県", "静岡県", "愛知県", "三重県", "滋賀県", "京都府", "大阪府", "兵庫県", "奈良県", "和歌山県",  
                                "鳥取県", "島根県", "岡山県", "広島県", "山口県", "徳島県", "香川県", "愛媛県", "高知県", "福岡県", 
                                "佐賀県", "長崎県", "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県");
        //都道府県選択欄
        $selectbox = "";
        foreach ($prefectureNames as &$prefectureName) { 
            $selected = ($prefectureName == $prefecture) ? 'selected' : '';
            $selectbox .= '<option value="' . $prefectureName . '"'. $selected .'>' . $prefectureName . '</option>' . "\n"; 
        }



    $inputView = View::make('input')->with('user', $user);
    $inputView->with('selectbox', $selectbox);
    return $inputView;
    }

}
