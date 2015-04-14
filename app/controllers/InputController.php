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
        //都道府県選択欄
        $prefectureNames = array("北海道", "青森県", "岩手県", "宮城県", "秋田県", "山形県", "福島県", "茨城県", "栃木県", "群馬県",
                                 "埼玉県", "千葉県", "東京都", "神奈川県", "新潟県", "富山県", "石川県", "福井県", "山梨県", "長野県",
                                 "岐阜県", "静岡県", "愛知県", "三重県", "滋賀県", "京都府", "大阪府", "兵庫県", "奈良県", "和歌山県",  
                                 "鳥取県", "島根県", "岡山県", "広島県", "山口県", "徳島県", "香川県", "愛媛県", "高知県", "福岡県", 
                                 "佐賀県", "長崎県", "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県");
        $selectbox = "";
        $prefecture = Input::get('prefecture', '');
        foreach ($prefectureNames as &$prefectureName) { 
            $selected = ($prefectureName == $prefecture) ? 'selected' : '';
            $selectbox .= '<option value="' . $prefectureName . '"'. $selected .'>' . $prefectureName . '</option>' . "\n"; 
        }

        // フォーム値取得
        $inputAll = Input::all();
        $user = new User($inputAll);

        //入力画面表示
        $inputView = View::make('input')->with('user', $user);
        $inputView->with('selectbox', $selectbox);
        return $inputView;
    }
}
