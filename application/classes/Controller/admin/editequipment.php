<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_editequipment extends Controller_Admin {

  public function action_index()
  {
    $logged_user = Auth::instance()->get_user();

    $id = $this->request->param('id');
    $equipment = ORM::factory('equipment')
      ->where('id','=',$id)
      ->find();


    $date = date("Y/m/d");

    $this->template->content = View::factory('admin/editequipment')
      ->set(array('message' =>  '',
            'equipment' => $equipment,));
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "active";
    $this->template->s3 = "";
    $this->template->s4 = "";

  }

  public function action_edit()
  {
    $logged_user = Auth::instance()->get_user();

    $id = $this->request->param('id');
    $available = 0;
    if (isset($_POST['active'])) $available = 1;
    $equipment = ORM::factory('equipment')
      ->where('id','=',$id)
      ->find();

    $equipment->name = $_POST['name'];
    $equipment->modelnumber = $_POST['model'];
    $equipment->comments = $_POST['comment'];
    $equipment->avaliable = $available;
    $equipment->update();

    $this->redirect('admin_equipment');
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "active";
    $this->template->s3 = "";
    $this->template->s4 = "";
  }

} // End Welcome
