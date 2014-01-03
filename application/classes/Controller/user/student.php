<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_student extends Controller_User {

	public function action_index()
	{
		$logged_user = Auth::instance()->get_user();

		$date = date("Y/m/d");
		$users = ORM::factory('user')
			->count_all();
		$futureRentals = ORM::factory('reservation')
			->where('date', '>', $date)
			->group_by('id')
			->count_all();
			
		$pastRentals = ORM::factory('reservation')
			->where('date', '<', $date)
			->group_by('id')
			->count_all();

		$this->template->content = View::factory('user/student')
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
