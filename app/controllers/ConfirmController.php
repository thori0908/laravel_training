<?php

class ConfirmController extends BaseController {

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

    public function showConfirm()
    {  
        // フォーム値取得 
        $inputAll = Input::all();
        $user = new User($inputAll);
        $pref_name = DB::table('prefectures')->where('pref_id', $user->pref_id)->pluck('pref_name');
        return View::make('confirm')->with('user', $user)->with('pref_name', $pref_name);
    }

}
