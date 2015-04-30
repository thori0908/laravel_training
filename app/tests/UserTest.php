<?php

require '/home/hori/public_html/laravel_training/app/models/User.php';
class UserTest extends TestCase 
{

    /**
     * @dataProvider otherProvider
     */

    public function testOther($input, $expected)
    {
        $user = new User();
        $this->assertEquals($expected, $user->checkHobbyOther($input));
    }

    public function otherProvider()
    {
        return array(
            array(array('hobbyOtherText'=>'てすとてすと', 'hobbyOther'=>''),      // $input
                  array('hobbyOtherText'=>'てすとてすと', 'hobbyOther'=>'その他') // $expected
            ),
        ); 
    }

    /**
     * @dataProvider fullnameProvider
     */
    public function testFullname($input, $expected)
    {
        $user = new User($input);
        $this->assertEquals($expected, $user->getFullname());
    }

    public function fullnameProvider()
    {
        return array(
            array(array('lastname'=>'苗字', 'firstname'=>'名前'), // $input
                  '苗字 名前' // $expected
            )
        );
    }

    /**
     * @dataProvider escapeProvider
     */
    public function testEscape($input, $expected)
    {
        $this->assertEquals($expected, User::escapeFormValue($input));
    }

    public function escapeProvider()
    {
        return array(
                // 半角スペースエスケープチェック
                   // $input                             ,     $expected
                array(array('lastname'      =>' あああ '),     array('lastname'      =>'あああ')),  
                array(array('firstname'     =>' いいい '),     array('firstname'     =>'いいい')), 
                array(array('postcodeFirst' =>' 123 '),        array('postcodeFirst' =>'123')), 
                array(array('postcodeSecond'=>' 1234 '),       array('postcodeSecond'=>'1234')), 
                array(array('mailaddress'   =>' aaa@ii.com '), array('mailaddress'   =>'aaa@ii.com')), 
                array(array('opinion'       =>' うううう '),   array('opinion'       =>'うううう')), 
                array(array('hobbyOtherText'=>' えええええ '), array('hobbyOtherText'=>'えええええ')),
                // 全角スペースエスケープチェック
                array(array('lastname'      =>'　あああ　'),     array('lastname'      =>'あああ')),  
                array(array('firstname'     =>'　いいい　'),     array('firstname'     =>'いいい')), 
                array(array('postcodeFirst' =>'　123　'),        array('postcodeFirst' =>'123')), 
                array(array('postcodeSecond'=>'　1234　'),       array('postcodeSecond'=>'1234')), 
                array(array('mailaddress'   =>'　aaa@ii.com　'), array('mailaddress'   =>'aaa@ii.com')), 
                array(array('opinion'       =>'　うううう　'),   array('opinion'       =>'うううう')), 
                array(array('hobbyOtherText'=>'　えええええ　'), array('hobbyOtherText'=>'えええええ')),
                // htmlエスケープチェック
                array(array('lastname'      =>'&あ<あ>あ\"'),     array('lastname'      =>'&amp;あ&lt;あ&gt;あ\&quot;')),  
                array(array('firstname'     =>'&い<い>い\"'),     array('firstname'     =>'&amp;い&lt;い&gt;い\&quot;')), 
                array(array('postcodeFirst' =>'&1<2>3\"'),        array('postcodeFirst' =>'&amp;1&lt;2&gt;3\&quot;')), 
                array(array('postcodeSecond'=>'&1<2>34\"'),       array('postcodeSecond'=>'&amp;1&lt;2&gt;34\&quot;')), 
                array(array('mailaddress'   =>'&a<a>a@ii.com\"'), array('mailaddress'   =>'&amp;a&lt;a&gt;a@ii.com\&quot;')), 
                array(array('opinion'       =>'&う<う>うう\"'),   array('opinion'       =>'&amp;う&lt;う&gt;うう\&quot;')), 
                array(array('hobbyOtherText'=>'&え<え>えええ\"'), array('hobbyOtherText'=>'&amp;え&lt;え&gt;えええ\&quot;'))
        );
    }
}
