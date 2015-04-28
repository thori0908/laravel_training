<?php
require '/home/hori/public_html/laravel_training/app/controllers/InputController.php';

class InputControllerTest extends TestCase 
{
	public function testShowInput()
	{
        $crawler = $this->client->request('GET', 'input');
        var_dump($crawler->filter('form')->extract(array('action')));
        $url = $crawler->filter('form')->extract(array('action'));
        $this->assertEquals('http://localhost/confirm', $url[0]);

	}
}
