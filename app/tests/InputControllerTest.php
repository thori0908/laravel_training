<?php
require '/home/hori/public_html/laravel_training/app/controllers/InputController.php';

class InputControllerTest extends TestCase 
{
	public function testShowInput()
	{
        $crawler = $this->client->request('GET', 'input');
        $url = $crawler->filter('form')->first()->attr('action');
        $this->assertEquals(url('/confirm'), $url);
	}
}
