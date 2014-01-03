<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_admin extends Controller_Admin {

	public function action_index()
	{
		$logged_user = Auth::instance()->get_user();

		$date = date("Y/m/d");
		$users = ORM::factory('user')
			->count_all();
		$futureRentals = ORM::factory('reservation')
			->where('date', '>', $date)
			->count_all();
		$pastRentals = ORM::factory('reservation')
			->where('date', '<', $date)
			->count_all();

		$this->template->content = View::factory('admin/admin')
			->set(array('message'	=>	'',
						'user' => $logged_user,
						'users' => $users,
						'futureRentals' => $futureRentals,
						'pastRentals' => $pastRentals,));
		$this->template->user = $logged_user->username;
		$this->template->s1 = "active";
		$this->template->s2 = " ";
		$this->template->s3 = " ";
		$this->template->s4 = " ";

	}

} // End Welcome
