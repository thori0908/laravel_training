<?php
require '/home/hori/public_html/laravel_training/app/controllers/ConfirmController.php';

class ConfirmControllerTest extends TestCase 
{

    /**
     * @dataProvider showConfirmProvider
     */

	public function testShowConfirm($input, $expected)
	{
      $this->client->request('GET', 'input'); // in order to get "_token"
      $input = array_merge($input, array("_token"=>csrf_token()));

      $crawler = $this->client->request('POST', 'confirm', $input);
      $this->assertResponseStatus($expected);
	}

	public function showConfirmProvider()
    {
      $correctUser = array(
                      "lastname"      =>"あああ",
                      "firstname"     =>"あああ", 
                      "gender"        =>"男", 
                      "postcodeFirst" =>"123",
                      "postcodeSecond"=>"1234", 
                      "pref_id"       => "1", 
                      "mailaddress"   =>"aaaaaaa@aa.com");

      $errorUser = array(
                      "lastname"      =>"ああa",
                      "firstname"     =>"あああ", 
                      "gender"        =>"男", 
                      "postcodeFirst" =>"123",
                      "postcodeSecond"=>"1234", 
                      "pref_id"       => "1", 
                      "mailaddress"   =>"aaaaaaa@aa.com");
        return array(
                //     $input      , $expected 
                 array($correctUser, 200),
                 array($errorUser,   302)
        );
    }
}
