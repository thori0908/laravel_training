<?php

require '/home/hori/public_html/laravel_training/app/models/ErrMessage.php';
class ErrMessageTest extends TestCase 
{

    /**
     * @dataProvider getErrMessagesProvider
     */

	public function testGetErrMessages($input, $expected)
	{
    //    var_dump($input);
        $errMessages = new ErrMessage();
        $validator = $errMessages->getErrMessages($input);
       // var_dump($validator->messages($validator));
      //  var_dump($validator->messages()->first('lastname'));
        $errMessage = $validator->messages()->first(key($input));
        var_dump($errMessage);
        $this->assertEquals($expected, $errMessage);
	}

	public function getErrMessagesProvider()
    {
        $expected = '姓を全角で入力して下さい';
        $name51 = str_repeat("あいうえお", 11);

        return array(
                //     $input                        ,$expected 
                 array(array('lastname' =>''),       '姓を入力して下さい'),
                 array(array('lastname' =>'aaaa'),   '姓を全角で入力して下さい'),
                 array(array('lastname' => $name51), '姓を50文字以内で入力して下さい'),
                 array(array('firstname'=>''),       '名を入力して下さい'),
                 array(array('firstname'=>'aasdf'),  '名を全角で入力して下さい'),
                 array(array('firstname'=> $name51), '名を50文字以内で入力して下さい'),
                 array(array('gender'=>'男'),        ''),
                 array(array('gender'=>''),          '性別を選択して下さい'),
                 array(array('postcodeFirst' =>''),  '郵便番号を入力して下さい'),
                 array(array('postcodeSecond'=>''),  '郵便番号を入力して下さい'),
                 array(array('pref_id'=>''),         '都道府県を選択してください'),
                 array(array('pref_id'=>'default'),  '都道府県を選択してください'),
                 array(array('mailaddress'=>''),     'メールアドレスを入力して下さい'),
                 array(array('mailaddress'=>'aaa'),  'メールアドレスを正しく入力して下さい')
        ); 
    }
}
