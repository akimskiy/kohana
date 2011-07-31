<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Hello extends Controller_Template {
	public $template = 'site';

	function action_index()
	{
		$this->template->message = 'Hello world!';
		echo $this->request->param( 'action' );
	}
}
