<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

	public $template = 'user/template';

	public function action_index()
	{
		$this->template->content = View::factory('user/user')
			->set(array('message'	=>	'',));
		$this->template->s1 = "active";
		$this->template->s2 = " ";
		$this->template->s3 = " ";
		$this->template->s4 = " ";


	}
} // End Welcome
