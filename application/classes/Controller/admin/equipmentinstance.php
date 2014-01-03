<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_equipmentinstance extends Controller_Admin {

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

    $this->template->content = View::factory('admin/equipmentinstance')
      ->set(array('equipment' => $equipment,
                  'futureReservations' => $futureReservations,
                  'pastReservations' => $pastReservations,));
    $this->template->user = $logged_user->username;
    $this->template->s1 = "";
    $this->template->s2 = "active";
    $this->template->s3 = "";
    $this->template->s4 = "";

  }

  public function action_disable()
  {
      $id = $this->request->param('id');
      $equipment = ORM::factory('equipment')
      ->where('id','=',$id)
      ->find();
      $equipment->avaliable = 0;
      $equipment->update();
      $this->redirect('admin_equipmentinstance/index/'.$id);
      $this->template->s1 = "";
      $this->template->s2 = "active";
      $this->template->s3 = "";
      $this->template->s4 = "";
  }

  public function action_remove()
  {
    $id = $this->request->param('id');
    $equipment = ORM::factory('equipment')
    ->where('id','=',$id)
    ->find();
    $equipment->delete();
    $this->redirect('admin_admin');
    $this->template->s1 = "";
    $this->template->s2 = "active";
    $this->template->s3 = "";
    $this->template->s4 = "";
  }

} // End Welcome
