<?php
class Test_Presenter_Sample_About extends TestCase
{
	public function test_view() {
		// setup
		$presenter = Presenter::forge(Presenter_Sample_About::class, 'view', null, View::forge());

		// exercise
		$presenter->view();

		// verify
		$this->assertContains('test', $presenter->memo);
	}
}
