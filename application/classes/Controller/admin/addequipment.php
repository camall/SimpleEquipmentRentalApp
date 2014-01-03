<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_addequipment extends Controller_Admin {

  public function action_index()
  {
    $logged_user = Auth::instance()->get_user();

    $this->template->content = View::factory('admin/addequipment');
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "active";
    $this->template->s3 = "";
    $this->template->s4 = "";

  }

  public function action_add()
  {
    $newEquipment = ORM::factory('equipment');
    $available = 0;
    if (isset($_POST['active'])) $available = 1;

    $newEquipment->name = $_POST['name'];
    $newEquipment->modelnumber = $_POST['model'];
    $newEquipment->dateofpurchase = $_POST['date'];
    $newEquipment->comments = $_POST['comment'];
    $newEquipment->avaliable = $available;
    $newEquipment->save();

    $this->redirect('admin_equipment');
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "active";
    $this->template->s3 = "";
    $this->template->s4 = "";
  }

} // End Welcome
