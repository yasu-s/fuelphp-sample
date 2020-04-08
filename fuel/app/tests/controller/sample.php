<?php
class Test_Controller_Sample extends TestCase
{
	public function test_create_sample() {
		// exercise
		$response = Request::forge('sample/index')
			->set_method('GET')
			->execute()
			->response();

		// verify
		$this->assertContains('sample', $response->body->__toString());
	}
}
