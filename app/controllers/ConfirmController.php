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
        return View::make('confirm')->with('user', $user);
    }

}
