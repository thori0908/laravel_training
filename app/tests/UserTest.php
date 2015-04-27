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
     // $crawler = $this->client->request('GET', '/');
        $this->assertEquals($expected, $user->checkHobbyOther($input));
     // $this->assertTrue($this->client->getResponse()->isOk());
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
}
