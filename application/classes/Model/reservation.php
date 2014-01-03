<?php defined('SYSPATH') or die('No direct script access.');

class Model_Reservation extends ORM {

	protected $_has_many = array(
		'users' => array(), 
		'equipments' => array(), 
	);
}