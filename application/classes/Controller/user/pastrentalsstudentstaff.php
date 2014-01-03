<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_pastrentalsstudentstaff extends Controller_User {

  public function action_index()
  {
    $logged_user = Auth::instance()->get_user();

    $date = date("Y/m/d");
    $logged_user = Auth::instance()->get_user();

    $pastReservations = ORM::factory('reservation')
      ->join('users', 'INNER')->on('reservation.users_id', '=', 'users.id')
      ->join('equipment', 'INNER')->on('reservation.equipments_id', '=', 'equipment.id')
      ->select('users.*')
      ->select('equipment.*')
      ->where('users_id','=',$logged_user->id)
      ->where('date', '<', $date)
      ->find_all();

    $this->template->content = View::factory('user/pastrentalsstudentstaff')
      ->set(array(
            'user' => $logged_user,
            'pastReservations' => $pastReservations,));
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "";
    $this->template->s3 = "";
    $this->template->s4 = "active";

  }

} // End Welcome
