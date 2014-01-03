<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-30 17:23:40 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$template ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:23:40 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Equ...', 7, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:23:56 --- CRITICAL: View_Exception [ 0 ]: The requested view najnovije could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-05-30 17:23:56 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(137): Kohana_View->set_filename('najnovije')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(30): Kohana_View->__construct('najnovije', NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php(7): Kohana_View::factory('najnovije')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-05-30 17:26:41 --- CRITICAL: View_Exception [ 0 ]: The requested view najnovije could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-05-30 17:26:41 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(137): Kohana_View->set_filename('najnovije')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(30): Kohana_View->__construct('najnovije', NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php(7): Kohana_View::factory('najnovije')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-05-30 17:26:50 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:26:50 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\wamp\www\Equ...', 7, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:27:13 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$template ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:27:13 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Equ...', 7, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:28:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$template ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:28:42 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Equ...', 7, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:29:02 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:29:02 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\wamp\www\Equ...', 7, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:29:11 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$template ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:29:11 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Equ...', 7, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\Welcome.php:7
2013-05-30 17:30:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in :
2013-05-30 17:30:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-30 17:30:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::serve() ~ APPPATH\views\template.php [ 8 ] in :
2013-05-30 17:30:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-30 18:51:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\Controller\welcome.php [ 10 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\welcome.php:10
2013-05-30 18:51:21 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\welcome.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Equ...', 10, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\welcome.php:10
2013-05-30 18:51:22 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\Controller\welcome.php [ 10 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\welcome.php:10
2013-05-30 18:51:22 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\welcome.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Equ...', 10, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\welcome.php:10
2013-05-30 18:53:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\login.php [ 55 ] in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:55
2013-05-30 18:53:59 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\login.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 55, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:55