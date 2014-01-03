<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_logout extends Controller_Admin {

	public $template = 'template';

	public function action_index()
	{

		Auth::instance()->logout();
		$this->template->content = View::factory('login')
			->set(array('message'	=>	'',));
		$this->template->title = "Please log in";


	}

} // End Welcome
