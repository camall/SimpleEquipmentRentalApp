<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-02 08:13:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `login`.`id` AS `id`, `login`.`name` AS `name`, `login`.`password` AS `password`, `login`.`usergroups_id` AS `usergroups_id` FROM `logins` AS `login` WHERE `username` = 'wqeqw' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-02 08:13:49 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `login`....', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(17): Kohana_ORM->find()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-02 08:21:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `login`.`id` AS `id`, `login`.`name` AS `name`, `login`.`password` AS `password`, `login`.`usergroups_id` AS `usergroups_id` FROM `logins` AS `login` WHERE `username` = 'qwert' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-02 08:21:59 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `login`....', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(17): Kohana_ORM->find()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-02 08:22:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `login`.`id` AS `id`, `login`.`name` AS `name`, `login`.`password` AS `password`, `login`.`usergroups_id` AS `usergroups_id` FROM `logins` AS `login` WHERE `username` = 'weqwe' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-02 08:22:25 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `login`....', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(17): Kohana_ORM->find()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-02 08:22:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 12 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:12
2013-06-02 08:22:48 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 12, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:12
2013-06-02 08:24:21 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Login as array ~ APPPATH\classes\Controller\login.php [ 19 ] in :
2013-06-02 08:24:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-02 08:37:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\login.php [ 17 ] in :
2013-06-02 08:37:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-02 08:37:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\login.php [ 17 ] in :
2013-06-02 08:37:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-02 08:38:31 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php on line 16 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1846 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1846
2013-06-02 08:38:31 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\Equ...', 1846, Array)
#1 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(16): Kohana_ORM->where(Array)
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1846
2013-06-02 09:09:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\login.php [ 12 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:12
2013-06-02 09:09:50 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(12): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 12, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:12
2013-06-02 10:47:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\login.php [ 12 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:12
2013-06-02 10:47:19 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(12): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 12, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:12
2013-06-02 10:51:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH\classes\Controller\login.php [ 29 ] in :
2013-06-02 10:51:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-02 10:51:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH\classes\Controller\login.php [ 29 ] in :
2013-06-02 10:51:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-02 10:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\classes\Controller\login.php [ 9 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:9
2013-06-02 10:53:49 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 9, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:9
2013-06-02 10:53:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\classes\Controller\login.php [ 9 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:9
2013-06-02 10:53:51 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 9, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:9
2013-06-02 10:54:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\login.php [ 57 ] in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:57
2013-06-02 10:54:33 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\login.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 57, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:57
2013-06-02 10:54:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\login.php [ 57 ] in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:57
2013-06-02 10:54:40 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\login.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 57, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:57