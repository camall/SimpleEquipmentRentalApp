<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template {

	public $template = 'admin/template';

	public function action_index()
	{
		$this->template->content = View::factory('admin/admin')
			->set(array('message'	=>	'',));
		$this->template->s1 = "active";
		$this->template->s2 = " ";
		$this->template->s3 = " ";
		$this->template->s4 = " ";


	}
} // End Welcome
