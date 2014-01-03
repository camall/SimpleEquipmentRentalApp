<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_currentrentals extends Controller_Admin {

  public function action_index()
  {
    $logged_user = Auth::instance()->get_user();

    $date = date("Y/m/d");
    $logged_user = Auth::instance()->get_user();

    $futureReservations = ORM::factory('reservation')
      ->join('users', 'INNER')->on('reservation.users_id', '=', 'users.id')
      ->join('equipment', 'INNER')->on('reservation.equipments_id', '=', 'equipment.id')
      ->select('users.*')
      ->select('equipment.*')
      ->where('date', '>', $date)
      ->find_all();

    $this->template->content = View::factory('admin/currentrentals')
      ->set(array(
            'user' => $logged_user,
            'futureReservations' => $futureReservations,));
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "";
    $this->template->s3 = "active";
    $this->template->s4 = "";

  }

} // End Welcome
