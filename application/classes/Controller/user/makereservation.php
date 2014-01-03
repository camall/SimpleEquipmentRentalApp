<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_makereservation extends Controller_User {

  public function action_index()
  {
    $logged_user = Auth::instance()->get_user();

    $equipment = ORM::factory('equipment')
      ->find_all();

    $this->template->content = View::factory('user/equipmentstudentstaff')
      ->set(array('user' => $logged_user,
                  'equipment' => $equipment,));
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

    $reservation = ORM::factory('reservation')
      ->where('id','=',$id);
    $reservation->date = $_POST['date']." ".$_POST['time'];
    $reservation->users_id = $logged_user->id;
    $reservation->equipments_id = $id;
    $reservation->save();

    $this->template->content = View::factory('user/equipmentstudentstaff')
      ->set(array('user' => $logged_user,
                  'equipment' => $equipment,));
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "active";
    $this->template->s3 = "";
    $this->template->s4 = "";

  }



} // End Welcome
