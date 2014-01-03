<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {


	protected $_has_many = array( 
		'roles'		 	=> array('through' => 'roles_users'),  
	);

	protected $_belongs_to = array(
		'reservations'	 => array(),
	);

	public function rules()
	{
		return array(
			'username' => array(
				array('not_empty'),
			),
			'password' => array(
				array('not_empty'),
			),
		);
	}

	public function filters()
	{
	    return array(
	        'password' => array(
	            array(array(Auth::instance(), 'hash'))
	        )
	    );
	}
}