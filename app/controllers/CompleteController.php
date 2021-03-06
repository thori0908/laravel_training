<?php

use Illuminate\Routing\Controller as BaseController; 

class CompleteController extends BaseController {

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

    public function showComplete() {
        $inputAll = Input::all();
        $user = new User($inputAll); 
        $user->save(); 
        
        return View::make('complete_issue36');
    }

}
