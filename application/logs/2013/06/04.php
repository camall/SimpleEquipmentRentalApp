<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-04 02:43:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\login.php [ 93 ] in :
2013-06-04 02:43:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 03:32:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: s1 ~ APPPATH\views\admin\template.php [ 23 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:23
2013-06-04 03:32:53 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 23, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:23
2013-06-04 03:32:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: s1 ~ APPPATH\views\admin\template.php [ 23 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:23
2013-06-04 03:32:54 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 23, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:23
2013-06-04 03:33:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: s2 ~ APPPATH\views\admin\template.php [ 25 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:25
2013-06-04 03:33:37 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 25, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:25
2013-06-04 03:33:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: s2 ~ APPPATH\views\admin\template.php [ 25 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:25
2013-06-04 03:33:38 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 25, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:25
2013-06-04 03:33:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: s2 ~ APPPATH\views\admin\template.php [ 25 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:25
2013-06-04 03:33:46 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 25, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:25
2013-06-04 03:34:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: s1 ~ APPPATH\views\admin\template.php [ 23 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:23
2013-06-04 03:34:03 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 23, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipment))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:23
2013-06-04 03:42:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\admin\logout.php [ 8 ] in :
2013-06-04 03:42:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 03:42:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: s1 ~ APPPATH\views\admin\template.php [ 23 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:23
2013-06-04 03:42:41 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 23, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_logout))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:23
2013-06-04 03:43:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-04 03:43:34 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_logout))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-04 03:59:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Admin' not found ~ APPPATH\classes\Controller\admin\admin.php [ 3 ] in :
2013-06-04 03:59:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:07:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\login.php [ 11 ] in :
2013-06-04 04:07:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:08:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\login.php [ 44 ] in :
2013-06-04 04:08:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:32:29 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`equipmentrentalssst`.`reservations`, CONSTRAINT `fk_Reservations_Equipment1` FOREIGN KEY (`equipments_id`) REFERENCES `equipment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `equipment` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-04 04:32:29 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `eq...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php(46): Kohana_ORM->delete()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_equipmentinstancestudentstaff->action_reserve()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_equipmentinstancestudentstaff))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-04 04:35:14 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`equipmentrentalssst`.`reservations`, CONSTRAINT `fk_Reservations_Equipment1` FOREIGN KEY (`equipments_id`) REFERENCES `equipment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `equipment` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-04 04:35:14 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `eq...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php(46): Kohana_ORM->delete()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_equipmentinstancestudentstaff->action_reserve()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_equipmentinstancestudentstaff))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-04 04:36:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: futureReservations ~ APPPATH\classes\Controller\user\equipmentinstancestudentstaff.php [ 48 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:36:09 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 48, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_equipmentinstancestudentstaff->action_reserve()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_equipmentinstancestudentstaff))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:36:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: futureReservations ~ APPPATH\classes\Controller\user\equipmentinstancestudentstaff.php [ 48 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:36:12 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 48, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_equipmentinstancestudentstaff->action_reserve()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_equipmentinstancestudentstaff))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:37:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pastReservations ~ APPPATH\classes\Controller\user\equipmentinstancestudentstaff.php [ 48 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:37:32 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 48, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_equipmentinstancestudentstaff->action_reserve()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_equipmentinstancestudentstaff))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:37:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pastReservations ~ APPPATH\classes\Controller\user\equipmentinstancestudentstaff.php [ 48 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:37:36 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 48, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_equipmentinstancestudentstaff->action_reserve()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_equipmentinstancestudentstaff))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:37:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logged_user ~ APPPATH\classes\Controller\user\equipmentinstancestudentstaff.php [ 48 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:37:45 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 48, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_equipmentinstancestudentstaff->action_reserve()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_equipmentinstancestudentstaff))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:37:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logged_user ~ APPPATH\classes\Controller\user\equipmentinstancestudentstaff.php [ 48 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:37:49 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 48, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_equipmentinstancestudentstaff->action_reserve()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_equipmentinstancestudentstaff))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\equipmentinstancestudentstaff.php:48
2013-06-04 04:44:27 --- CRITICAL: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Equipment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-04 04:44:27 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('date', '2013-06-14')
#1 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\makereservation.php(33): Kohana_ORM->__set('date', '2013-06-14')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_makereservation->action_reserve()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_makereservation))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-04 04:44:59 --- CRITICAL: Kohana_Exception [ 0 ]: The save property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-04 04:44:59 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('save')
#1 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\user\makereservation.php(36): Kohana_ORM->__get('save')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_User_makereservation->action_reserve()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_makereservation))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600