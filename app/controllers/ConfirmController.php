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
        //validation
        $errMessage = new ErrMessage();
      //  var_dump($inputAll);
       // $var = $errMessage->getErrLastname(array('lastname'=>$user->lastname, 'firstname'=>$user->firstname));
        $var = $errMessage->getErrLastname($inputAll);
      //  var_dump($var->fails());
       //   var_dump($inputAll);

        if ($var->fails()) {
            return Redirect::action('InputController@showInput')
                ->withErrors($errMessage->errors())
                ->withInput();
        }

        return View::make('confirm')->with('user', $user)->with('pref_name', $pref_name);
    }

}
