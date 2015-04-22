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
    // csrf filter
    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function showConfirm() {  
        // フォーム値取得 
        $inputAll = Input::all();
        //escape
        $inputAll = User::escapeFormValue($inputAll);
        $user = new User($inputAll);
        $pref_name = DB::table('prefectures')->where('pref_id', $user->pref_id)->pluck('pref_name');
        // validation
        $errMessage = new ErrMessage();
        $validator = $errMessage->getErrMessages($inputAll);
        if ($validator->fails()) {
            return Redirect::to('input')
                ->withErrors($validator->messages())
                ->with('user', $user);
        }
        return View::make('confirm')->with('user', $user)->with('pref_name', $pref_name);
    }
}
