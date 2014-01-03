<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_equipmentstudentstaff extends Controller_User {

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

} // End Welcome
