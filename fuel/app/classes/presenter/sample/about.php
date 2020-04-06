<?php
/**
 * The sample about presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Sample_About extends Presenter
{
	/**
	 *
	 * @return void
	 */
	public function view()
	{
		$this->memo = 'test';
	}
}
