<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Createuser extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('createuser')
				->set(array('message'	=>	'',));
			$this->template->title = "Log In";
	}

	public function action_createuser()
	{
	//$this->template->content = View::factory('createuser');

		
		$newuser = ORM::factory('user');

		$newuser->username = $_POST['username'];

		$newuser->password = $_POST['password'];

		//$newuser->email = $_POST['email'];

		$newuser->save();

		$newuser->add('roles', ORM::factory('role', array('name' => 'login')));

		/*$role = ORM::factory('role')->where('name', '=', 'login')->find();
		$user->add('roles', $role);
*/
		$this->template->content = View::factory('login')
				->set(array('message'	=>	'',));
			$this->template->title = "Log In";

	}


} // End Welcome
