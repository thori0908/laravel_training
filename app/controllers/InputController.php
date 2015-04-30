<?php

use Illuminate\Routing\Controller as BaseController; 

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
        //都道府県データ取得
        $pref_names = DB::table('prefectures')->lists('pref_name','pref_id');
        // フォーム値取得
        $inputAll = Input::all();
        // redirect時の処理
        if (Session::has('user')) {
            $user = Session::get('user');
        } else { 
            $user = new User($inputAll);
        }
        //入力画面表示
        $inputView = View::make('input')->with('user', $user)->with('pref_names', $pref_names);
        return $inputView;
    }
}
