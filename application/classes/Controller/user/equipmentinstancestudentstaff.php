<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_equipmentinstancestudentstaff extends Controller_User {

  public function action_index()
  {
    $date = date("Y/m/d");
    $logged_user = Auth::instance()->get_user();
    $id = $this->request->param('id');
    $equipment = ORM::factory('equipment')
      ->where('id','=',$id)
      ->find();

    $futureReservations = ORM::factory('reservation')
      ->join('equipment', 'INNER')->on('reservation.equipments_id', '=', 'equipment.id')
      ->select('equipment.*')
      ->where('equipments_id','=',$id)
      ->where('date', '>', $date)
      ->find_all();

    $pastReservations = ORM::factory('reservation')
      ->join('equipment', 'INNER')->on('reservation.equipments_id', '=', 'equipment.id')
      ->select('equipment.*')
      ->where('equipments_id','=',$id)
      ->where('date', '<', $date)
      ->find_all();

    $this->template->content = View::factory('user/equipmentinstancestudentstaff')
      ->set(array('equipment' => $equipment,
                  'futureReservations' => $futureReservations,
                  'pastReservations' => $pastReservations,));
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "active";
    $this->template->s3 = "";
    $this->template->s4 = "";

  }

  public function action_reserve()
  {
    $logged_user = Auth::instance()->get_user();
    $id = $this->request->param('id');
    $equipment = ORM::factory('equipment')
    ->where('id','=',$id)
    ->find();
    $this->template->content = View::factory('user/makereservation')
      ->set(array('equipment' => $equipment,));
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "active";
    $this->template->s3 = "";
    $this->template->s4 = "";
  }

} // End Welcome
