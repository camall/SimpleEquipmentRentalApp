<?php defined('SYSPATH') or die('No direct script access.');

class Model_Equipment extends ORM {

	protected $_belongs_to = array(
		'reservations'	 => array(),
	);
}