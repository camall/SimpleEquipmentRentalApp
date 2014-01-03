<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-05 06:20:25 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`equipmentrentalssst`.`reservations`, CONSTRAINT `fk_Reservations_Equipment1` FOREIGN KEY (`equipments_id`) REFERENCES `equipment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `equipment` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-05 06:20:25 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `eq...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php(61): Kohana_ORM->delete()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipmentinstance->action_remove()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251