<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {

	public function before()
	{
		parent::before();
		
		if (Auth::instance()->logged_in()){
			$logged_user = Auth::instance()->get_user();
			if ($logged_user->username == "system" && $logged_user->password = "admin"){
				$this->redirect('admin_admin');
			}
			else $this->redirect('user_student');
		}
			
	}

	public function action_index()
	{
		
		$this->template->content = View::factory('Login')
			->set(array('message'	=>	'',));
		$this->template->title = "Log In";

	}

	public function action_Login()
	{
		if (Auth::instance()->logged_in())
			$this->redirect('');
		else{
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (Auth::instance()->login($username, $password)){
			if ($username == "system" && $password == "admin")
			{
				$this->redirect('admin_admin');
			}
			else
			$this->redirect('user_student');
		}
		else{
			$this->template->content = View::factory('Login')
			->set(array('message'	=>	'Please try again',));
			$this->template->title = "Log In";

		}
	}
}
} // End Welcome
