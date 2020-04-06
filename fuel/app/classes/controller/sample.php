<?php

/**
 * サンプルコントローラー
 * @package  app
 * @extends  Controller
 */
class Controller_Sample extends Controller
{
	/**
	 * サンプルページ
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('sample/index'));
	}
}
