<?php

class Controller_Api extends Controller_Rest
{
	// protected $format = 'json';

	public function get_list()
	{
		return $this->response(array(
			'foo' => Input::get('foo'),
			'baz' => array(
				1, 50, 219
			),
		));
	}
}
