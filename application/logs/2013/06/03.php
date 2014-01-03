<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-03 10:24:41 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:115
2013-06-03 10:24:41 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(115): Kohana_Cookie::salt('user', '1')
#1 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(24): Kohana_Cookie::set('user', '1')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:115
2013-06-03 10:26:04 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:24
2013-06-03 10:26:04 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(24): Kohana_Cookie::salt('user', '1')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:24
2013-06-03 10:27:04 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:24
2013-06-03 10:27:04 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(24): Kohana_Cookie::salt('user', '1')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:24
2013-06-03 13:26:50 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:24
2013-06-03 13:26:50 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(24): Kohana_Cookie::salt('user', '1')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:24
2013-06-03 13:27:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\login.php [ 56 ] in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 13:27:46 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\login.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 56, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(22): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 13:28:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\login.php [ 56 ] in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 13:28:06 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\login.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 56, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(22): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 13:28:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\login.php [ 56 ] in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 13:28:16 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\login.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 56, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(22): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 13:29:22 --- CRITICAL: View_Exception [ 0 ]: The requested view admin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 13:29:22 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin', NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(26): Kohana_View::factory('admin')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 13:38:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 13:38:25 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 13:39:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 13:39:12 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 13:39:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 13:39:14 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 13:39:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 13:39:14 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 13:40:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\login.php [ 11 ] in :
2013-06-03 13:40:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 13:54:39 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'Now' ~ APPPATH\classes\Controller\login.php [ 9 ] in :
2013-06-03 13:54:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 13:54:50 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'current' ~ APPPATH\classes\Controller\login.php [ 9 ] in :
2013-06-03 13:54:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 13:58:09 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Date - assumed 'Date' ~ APPPATH\classes\Controller\login.php [ 9 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:9
2013-06-03 13:58:09 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\Equ...', 9, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:9
2013-06-03 13:58:19 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'Seconds' ~ APPPATH\classes\Controller\login.php [ 9 ] in :
2013-06-03 13:58:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 13:58:21 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'Seconds' ~ APPPATH\classes\Controller\login.php [ 9 ] in :
2013-06-03 13:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 13:58:21 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'Seconds' ~ APPPATH\classes\Controller\login.php [ 9 ] in :
2013-06-03 13:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 13:58:21 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'Seconds' ~ APPPATH\classes\Controller\login.php [ 9 ] in :
2013-06-03 13:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 13:58:26 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'Minutes' ~ APPPATH\classes\Controller\login.php [ 9 ] in :
2013-06-03 13:58:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 13:58:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Current' not found ~ APPPATH\classes\Controller\login.php [ 9 ] in :
2013-06-03 13:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:02:09 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.equipment' doesn't exist [ SHOW FULL COLUMNS FROM `equipment` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:02:09 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('equipment')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(32): Kohana_ORM::factory('equipment')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:05:27 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.equipment' doesn't exist [ SHOW FULL COLUMNS FROM `equipment` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:05:27 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('equipment')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(32): Kohana_ORM::factory('equipment')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:06:06 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.equipment' doesn't exist [ SHOW FULL COLUMNS FROM `equipment` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:06:06 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('equipment')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(32): Kohana_ORM::factory('equipment')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:07:38 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.equipment' doesn't exist [ SHOW FULL COLUMNS FROM `equipment` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:07:38 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('equipment')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(32): Kohana_ORM::factory('equipment')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:07:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_equipments' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-03 14:07:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:08:31 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.equipmentses' doesn't exist [ SHOW FULL COLUMNS FROM `equipmentses` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:08:31 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('equipmentses')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(32): Kohana_ORM::factory('equipments')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 14:08:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_equipment' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-03 14:08:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:09:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_equipment' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-03 14:09:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:09:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\login.php [ 15 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:15
2013-06-03 14:09:35 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 15, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:15
2013-06-03 14:09:57 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\admin.php [ 47 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php:47
2013-06-03 14:09:57 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php(47): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\Equ...', 47, Array)
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
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php:47
2013-06-03 14:10:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\login.php [ 15 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:15
2013-06-03 14:10:14 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 15, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:15
2013-06-03 14:14:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'date' (T_STRING) ~ APPPATH\classes\Controller\login.php [ 30 ] in :
2013-06-03 14:14:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:15:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$date' (T_VARIABLE) ~ APPPATH\classes\Controller\login.php [ 30 ] in :
2013-06-03 14:15:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:15:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'date' (T_STRING) ~ APPPATH\classes\Controller\login.php [ 30 ] in :
2013-06-03 14:15:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:16:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\classes\Controller\login.php [ 30 ] in :
2013-06-03 14:16:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:16:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\classes\Controller\login.php [ 30 ] in :
2013-06-03 14:16:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:16:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\classes\Controller\login.php [ 27 ] in :
2013-06-03 14:16:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:21:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting ',' or ';' ~ APPPATH\views\admin\admin.php [ 47 ] in :
2013-06-03 14:21:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 14:29:53 --- CRITICAL: View_Exception [ 0 ]: The requested view admin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 14:29:53 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin', NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\admin.php(7): Kohana_View::factory('admin')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_admin->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 14:30:17 --- CRITICAL: View_Exception [ 0 ]: The requested view admin_admin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 14:30:17 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin_admin')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin_admin', NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\admin.php(7): Kohana_View::factory('admin_admin')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_admin->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 14:30:18 --- CRITICAL: View_Exception [ 0 ]: The requested view admin_admin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 14:30:18 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin_admin')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin_admin', NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\admin.php(7): Kohana_View::factory('admin_admin')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_admin->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 14:30:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 14:30:21 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 14:32:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 14:32:02 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 14:42:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\template.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 14:42:54 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 14:48:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:48:14 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:48:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:48:14 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:48:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:48:14 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:48:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:48:21 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:58:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:58:01 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:58:02 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:58:02 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:59:04 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:59:04 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:59:07 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:59:07 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:59:35 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 14:59:35 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:00:18 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:00:18 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:07:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:07:17 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:11:59 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:11:59 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:12:00 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:12:00 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:12:00 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:12:00 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:12:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:12:01 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\EquipmentRentalSSST\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Cookie.php:67
2013-06-03 15:14:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 15:14:15 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(75): Kohana_ORM::factory('User')
#7 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('Kemal', 'dsadasd', false)
#8 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('Kemal', 'dsadasd')
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 15:19:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`password` AS `password`, `user`.`usergroups_id` AS `usergroups_id` FROM `users` AS `user` WHERE `username` = 'Kemal' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:19:47 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(76): Kohana_ORM->find()
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('Kemal', 'sadasd', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('Kemal', 'sadasd')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:20:22 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`usergroups_id` AS `usergroups_id` FROM `users` AS `user` WHERE `name` = 'Kemal' AND `password` = 'sadasd' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:20:22 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(32): Kohana_ORM->find()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:20:42 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 15:20:42 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('roles')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#6 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM::factory('Role', Array)
#7 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('Kemal', 'sadasd', false)
#8 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('Kemal', 'sadasd')
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 15:21:43 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 15:21:43 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('roles')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#6 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM::factory('Role', Array)
#7 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('Kemal', 'sadasd', false)
#8 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('Kemal', 'sadasd')
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 15:21:56 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 15:21:56 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('roles')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#6 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM::factory('Role', Array)
#7 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('Kemal', 'sadasd', false)
#8 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('Kemal', 'sadasd')
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 15:35:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`name` AS `name`, `user`.`password` AS `password`, `user`.`roles_id` AS `roles_id` FROM `users` AS `user` WHERE `username` = 'Kemal' AND `password` = 'passsword' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:35:04 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(32): Kohana_ORM->find()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:35:58 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:35:58 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('K', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('K', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:37:03 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:37:03 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('K', 'fdsfds', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('K', 'fdsfds')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:38:30 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:38:30 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('K', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('K', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:38:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\Controller\login.php [ 30 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:30
2013-06-03 15:38:51 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 30, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:30
2013-06-03 15:38:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\Controller\login.php [ 30 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:30
2013-06-03 15:38:57 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 30, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:30
2013-06-03 15:39:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\Controller\login.php [ 30 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:30
2013-06-03 15:39:23 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 30, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php:30
2013-06-03 15:39:47 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:39:47 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('K', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('K', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:42:01 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:42:01 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('K', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(34): Kohana_Auth->login('K', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:49:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:49:43 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:50:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:50:25 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:50:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:50:42 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:50:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:50:50 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:50:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:50:53 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:51:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 12 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:12
2013-06-03 15:51:12 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 12, Array)
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
2013-06-03 15:51:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:51:38 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 15:51:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\admin.php [ 4 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php:4
2013-06-03 15:51:49 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 4, Array)
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
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php:4
2013-06-03 15:52:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\login.php [ 56 ] in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 15:52:28 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\login.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 56, Array)
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
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 15:53:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\login.php [ 56 ] in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 15:53:03 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\login.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 56, Array)
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
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\login.php:56
2013-06-03 15:53:50 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:53:50 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('K', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(35): Kohana_Auth->login('K', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:55:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Useradmin_Model_User' not found ~ APPPATH\classes\Model\user.php [ 3 ] in :
2013-06-03 15:55:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 15:55:33 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 15:55:33 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('K', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(35): Kohana_Auth->login('K', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:07:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:07:18 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('K', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(35): Kohana_Auth->login('K', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:07:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:07:30 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('K', 'sadsd', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(35): Kohana_Auth->login('K', 'sadsd')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:07:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:07:44 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('k', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(35): Kohana_Auth->login('k', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:08:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:08:42 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('k', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(35): Kohana_Auth->login('k', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:34:44 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:34:44 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(19): Kohana_ORM->save()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:36:16 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:36:16 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(19): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 16:38:06 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:38:06 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(18): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:39:22 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:39:22 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(18): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:39:24 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:39:24 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(18): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:40:06 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Auth_User::create_user(), called in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php on line 18 and defined ~ MODPATH\orm\classes\Model\Auth\User.php [ 161 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php:161
2013-06-03 16:40:06 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(161): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\Equ...', 161, Array)
#1 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(18): Model_Auth_User->create_user(Array)
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php:161
2013-06-03 16:44:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\createuser.php [ 17 ] in :
2013-06-03 16:44:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 16:52:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\createuser.php [ 19 ] in :
2013-06-03 16:52:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 16:54:11 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:54:11 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(11): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 16:55:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 16:55:21 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 6, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\template.php:6
2013-06-03 16:58:10 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createuser.php [ 56 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:56
2013-06-03 16:58:10 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(56): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\Equ...', 56, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:56
2013-06-03 16:59:52 --- CRITICAL: View_Exception [ 0 ]: The requested view user/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 16:59:52 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/create')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/create', NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(14): Kohana_View::factory('user/create')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 17:00:06 --- CRITICAL: View_Exception [ 0 ]: The requested view user/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 17:00:06 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/create')
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/create', NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(14): Kohana_View::factory('user/create')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php:137
2013-06-03 17:01:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 56 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:56
2013-06-03 17:01:42 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 56, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:56
2013-06-03 17:04:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 55 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:55
2013-06-03 17:04:44 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 55, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:55
2013-06-03 17:07:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 55 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:55
2013-06-03 17:07:10 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 55, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:55
2013-06-03 17:07:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 55 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:55
2013-06-03 17:07:27 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 55, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:55
2013-06-03 17:08:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 55 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:55
2013-06-03 17:08:06 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 55, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:55
2013-06-03 17:11:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH\classes\Controller\createuser.php [ 16 ] in :
2013-06-03 17:11:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:16:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH\classes\Controller\createuser.php [ 17 ] in :
2013-06-03 17:16:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:16:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH\classes\Controller\createuser.php [ 17 ] in :
2013-06-03 17:16:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:16:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH\classes\Controller\createuser.php [ 17 ] in :
2013-06-03 17:16:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:16:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH\classes\Controller\createuser.php [ 17 ] in :
2013-06-03 17:16:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:17:17 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:17:17 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:18:58 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:18:58 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:24:21 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:24:21 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:26:51 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:26:51 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:30:43 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:30:43 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:31:00 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:31:00 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:31:07 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:31:07 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:33:04 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:33:04 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:34:49 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:34:49 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:37:48 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:37:48 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:40:02 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:40:02 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:44:34 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'equipmentrentalssst' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:75
2013-06-03 17:44:34 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('equipmentrental...')
#1 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(17): Kohana_ORM::factory('user')
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:75
2013-06-03 17:45:46 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:45:46 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:46:40 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:46:40 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:46:55 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:46:55 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(20): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:48:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 13 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:48:21 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 13, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:49:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 13 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:49:07 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 13, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:50:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 13 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:50:20 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 13, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:51:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 13 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:51:27 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 13, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:55:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\createuser.php [ 15 ] in :
2013-06-03 17:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:56:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\createuser.php [ 15 ] in :
2013-06-03 17:56:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:56:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\createuser.php [ 15 ] in :
2013-06-03 17:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:56:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\createuser.php [ 15 ] in :
2013-06-03 17:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:56:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\createuser.php [ 15 ] in :
2013-06-03 17:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:56:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\createuser.php [ 20 ] in :
2013-06-03 17:56:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:56:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\createuser.php [ 21 ] in :
2013-06-03 17:56:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 17:56:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\createuser.php [ 13 ] in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:56:47 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 13, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\template.php(12): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\createuser.php:13
2013-06-03 17:56:56 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:56:56 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(19): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:58:57 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘user’ - assumed '‘user’' ~ APPPATH\classes\Controller\createuser.php [ 17 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php:17
2013-06-03 17:58:57 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(17): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\Equ...', 17, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php:17
2013-06-03 17:59:12 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:59:12 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:59:18 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 17:59:18 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:04:04 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:04:04 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:04:26 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:04:26 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:04:30 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:04:30 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:06:09 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\createuser.php [ 7 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php:7
2013-06-03 18:06:09 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\wamp\www\Equ...', 7, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php:7
2013-06-03 18:06:18 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:06:18 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:10:16 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'q' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('q', '1efd1bc33b5f357c2c965dc0da26c40310128a318c8ebbbfcabe5dc1c94366ca', 'q') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:10:16 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:26:00 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 18:26:00 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('email', 'q')
#1 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(23): Kohana_ORM->__set('email', 'q')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 18:26:21 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 18:26:21 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('email', 'q')
#1 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(21): Kohana_ORM->__set('email', 'q')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 18:27:48 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `users` (`username`, `password`) VALUES ('1', '3ef68f2adf130c10bece11c5853be364bb610a26e5135dd8ae54a26596abd965') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:27:48 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(23): Kohana_ORM->save()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:28:10 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `users` (`username`, `password`) VALUES ('k', '389b1b29df71bfc34a8c843d7ee30050edf53713c482b2bf73b835b2dd9e7348') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:28:10 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(23): Kohana_ORM->save()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:33:54 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:33:54 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(26): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:34:31 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`equipmentrentalssst`.`roles_users`, CONSTRAINT `fk_Roles_Users_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (6, 'login') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:34:31 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(26): Kohana_ORM->add('roles', 'login')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:36:15 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`equipmentrentalssst`.`roles_users`, CONSTRAINT `fk_Roles_Users_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (7, 'login') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:36:15 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(26): Kohana_ORM->add('roles', 'login')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:41:18 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:41:18 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(19): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:42:17 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:42:17 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(19): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:44:45 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:44:45 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(19): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:44:52 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:44:52 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(19): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:45:11 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:45:11 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(19): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:45:36 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:45:36 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(19): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:1299
2013-06-03 18:46:37 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 't' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`) VALUES ('t', 'c8d4188ed2b6f0da186bbf6096128d55a8f771a44ef57e7e6ad55666cf5c07f5') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:46:37 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:46:56 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`) VALUES ('12', '843fd5feda8bc19603db6756bccbd8457adad6a122d4deaf63f7cca91f0c1688') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:46:56 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:47:34 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`) VALUES ('1234', '17cd8d27edf8d5122cbed55861eb6830903ebee46bb6a740fbdf355e79a08e87') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:47:34 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:48:49 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:48:49 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:49:11 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1234' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('1234', '17cd8d27edf8d5122cbed55861eb6830903ebee46bb6a740fbdf355e79a08e87', '1234') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:49:11 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 18:55:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\template.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 18:55:31 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 19:19:34 --- CRITICAL: Kohana_Exception [ 0 ]: The logins property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 19:19:34 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('logins', Object(Database_Expression))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(88): Kohana_ORM->__set('logins', Object(Database_Expression))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(270): Model_Auth_User->complete_login()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('1', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(36): Kohana_Auth->login('1', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 19:20:16 --- CRITICAL: Kohana_Exception [ 0 ]: The logins property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 19:20:16 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('logins', Object(Database_Expression))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(88): Kohana_ORM->__set('logins', Object(Database_Expression))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(270): Model_Auth_User->complete_login()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('1', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(36): Kohana_Auth->login('1', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 19:23:03 --- CRITICAL: Kohana_Exception [ 0 ]: The logins property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 19:23:03 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('logins', Object(Database_Expression))
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Model\Auth\User.php(88): Kohana_ORM->__set('logins', Object(Database_Expression))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(270): Model_Auth_User->complete_login()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\Auth\ORM.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\wamp\www\EquipmentRentalSSST\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('1', '1', false)
#5 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\login.php(36): Kohana_Auth->login('1', '1')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:699
2013-06-03 19:27:36 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `users` (`username`, `password`) VALUES ('2', '19c7a44fdc1cd942c2dae70fda6ac67d7d7a63237a01004507c8f6ff5a56d09f') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 19:27:36 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\createuser.php(25): Kohana_ORM->save()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Createuser->action_createuser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Createuser))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 19:28:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\login.php [ 37 ] in :
2013-06-03 19:28:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 19:29:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\template.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 19:29:02 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 19:33:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\template.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 19:33:49 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 19:34:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\template.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 19:34:10 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 19:36:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\admin\admin.php [ 27 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\admin.php:27
2013-06-03 19:36:41 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\admin.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\Equ...', 27, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\admin.php:27
2013-06-03 19:36:55 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 19:36:55 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php(4): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_admin))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 19:50:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\template.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 19:50:27 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipment))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 20:04:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\admin\equipment.php [ 14 ] in :
2013-06-03 20:04:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:05:01 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.equipment' doesn't exist [ SHOW FULL COLUMNS FROM `equipment` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 20:05:01 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('equipment')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipment.php(9): Kohana_ORM::factory('equipment')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipment->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipment))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 20:05:07 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.equipment' doesn't exist [ SHOW FULL COLUMNS FROM `equipment` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 20:05:07 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('equipment')
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipment.php(9): Kohana_ORM::factory('equipment')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipment->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipment))
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-03 20:06:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\admin\equipment.php [ 21 ] in :
2013-06-03 20:06:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:08:33 --- CRITICAL: Kohana_Exception [ 0 ]: The available property does not exist in the Model_Equipment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:08:33 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('available')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipment.php(25): Kohana_ORM->__get('available')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipment))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:08:49 --- CRITICAL: Kohana_Exception [ 0 ]: The available property does not exist in the Model_Equipment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:08:49 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('available')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipment.php(25): Kohana_ORM->__get('available')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipment))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:10:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\admin\equipment.php [ 21 ] in :
2013-06-03 20:10:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:15:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\admin\equipment.php [ 22 ] in :
2013-06-03 20:15:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:15:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\admin\equipment.php [ 22 ] in :
2013-06-03 20:15:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:16:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\admin\equipment.php [ 34 ] in :
2013-06-03 20:16:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:17:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\admin\equipment.php [ 22 ] in :
2013-06-03 20:17:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:21:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\template.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 20:21:01 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 20:21:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\template.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 20:21:02 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 20:23:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'set' (T_STRING) ~ APPPATH\classes\Controller\admin\equipmentinstance.php [ 14 ] in :
2013-06-03 20:23:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:23:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'set' (T_STRING) ~ APPPATH\classes\Controller\admin\equipmentinstance.php [ 14 ] in :
2013-06-03 20:23:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:32:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\admin\equipmentinstance.php [ 25 ] in :
2013-06-03 20:32:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:34:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_reservations' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-03 20:34:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 20:34:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: equipment ~ APPPATH\classes\Controller\admin\equipmentinstance.php [ 21 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php:21
2013-06-03 20:34:14 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 21, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipmentinstance->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php:21
2013-06-03 20:40:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'equipment_id' in 'on clause' [ SELECT `reservation`.`id` AS `id`, `reservation`.`date` AS `date`, `reservation`.`comment` AS `comment`, `reservation`.`users_id` AS `users_id`, `reservation`.`equipments_id` AS `equipments_id` FROM `reservations` AS `reservation` JOIN `equipment` ON (`equipment_id` = `equipment`.`id`) WHERE `equipments_id` = '1' AND `date` > '2013/06/03' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 20:40:17 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `reserva...', 'Model_Reservati...', Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php(18): Kohana_ORM->find_all()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipmentinstance->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 20:44:26 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:44:26 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:48:34 --- CRITICAL: Database_Exception [ 1146 ]: Table 'equipmentrentalssst.equipments' doesn't exist [ SELECT `reservation`.`id` AS `id`, `reservation`.`date` AS `date`, `reservation`.`comment` AS `comment`, `reservation`.`users_id` AS `users_id`, `reservation`.`equipments_id` AS `equipments_id` FROM `reservations` AS `reservation` INNER JOIN `equipments` ON (`reservations`.`equipments_id` = `equipment`.`id`) WHERE `equipments_id` = '1' AND `date` > '2013/06/03' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 20:48:34 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `reserva...', 'Model_Reservati...', Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php(18): Kohana_ORM->find_all()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipmentinstance->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 20:48:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'reservations.equipments_id' in 'on clause' [ SELECT `reservation`.`id` AS `id`, `reservation`.`date` AS `date`, `reservation`.`comment` AS `comment`, `reservation`.`users_id` AS `users_id`, `reservation`.`equipments_id` AS `equipments_id` FROM `reservations` AS `reservation` INNER JOIN `equipment` ON (`reservations`.`equipments_id` = `equipment`.`id`) WHERE `equipments_id` = '1' AND `date` > '2013/06/03' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 20:48:44 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `reserva...', 'Model_Reservati...', Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php(18): Kohana_ORM->find_all()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipmentinstance->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 20:49:32 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:49:32 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:16 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:16 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:18 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:18 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:19 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:20 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:20 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:22 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:54:22 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:57:33 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 20:57:33 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(41): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 21:31:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: e ~ APPPATH\views\admin\equipmentinstance.php [ 11 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php:11
2013-06-03 21:31:50 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 11, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\equipmentinstance.php:11
2013-06-03 21:33:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\template.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 21:33:17 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php:29
2013-06-03 21:34:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\admin\equipmentinstance.php [ 45 ] in :
2013-06-03 21:34:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 21:35:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\admin\equipmentinstance.php [ 45 ] in :
2013-06-03 21:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 21:36:50 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`equipmentrentalssst`.`reservations`, CONSTRAINT `fk_Reservations_Equipment1` FOREIGN KEY (`equipments_id`) REFERENCES `equipment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `equipment` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 21:36:50 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `eq...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php(53): Kohana_ORM->delete()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipmentinstance->action_remove()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 21:36:54 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`equipmentrentalssst`.`reservations`, CONSTRAINT `fk_Reservations_Equipment1` FOREIGN KEY (`equipments_id`) REFERENCES `equipment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `equipment` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 21:36:54 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `eq...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php(53): Kohana_ORM->delete()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipmentinstance->action_remove()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 21:47:35 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`equipmentrentalssst`.`reservations`, CONSTRAINT `fk_Reservations_Equipment1` FOREIGN KEY (`equipments_id`) REFERENCES `equipment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `equipment` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 21:47:35 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `eq...', false, Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\equipmentinstance.php(53): Kohana_ORM->delete()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_equipmentinstance->action_remove()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_equipmentinstance))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 21:58:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting ',' or ';' ~ APPPATH\views\admin\editequipment.php [ 20 ] in :
2013-06-03 21:58:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 21:58:29 --- CRITICAL: Kohana_Exception [ 0 ]: The available property does not exist in the Model_Equipment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 21:58:29 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('available')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\editequipment.php(20): Kohana_ORM->__get('available')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_editequipment))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 22:06:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$date' (T_VARIABLE) ~ APPPATH\classes\Controller\admin\editequipment.php [ 38 ] in :
2013-06-03 22:06:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:07:20 --- CRITICAL: Kohana_Exception [ 0 ]: The update property does not exist in the Model_Equipment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 22:07:20 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('update')
#1 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\editequipment.php(36): Kohana_ORM->__get('update')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_editequipment->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_editequipment))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 22:15:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: futureRentals ~ APPPATH\classes\Controller\admin\currentrentals.php [ 29 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\currentrentals.php:29
2013-06-03 22:15:50 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\currentrentals.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 29, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_currentrentals->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_currentrentals))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\currentrentals.php:29
2013-06-03 22:16:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\admin.php [ 11 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php:11
2013-06-03 22:16:18 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 11, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_currentrentals))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\admin.php:11
2013-06-03 22:18:10 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Reservation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 22:18:10 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\EquipmentRentalSSST\application\views\admin\currentrentals.php(21): Kohana_ORM->__get('name')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_currentrentals))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php:600
2013-06-03 22:19:23 --- CRITICAL: Database_Exception [ 1051 ]: Unknown table 'user' [ SELECT `user`.*, `reservation`.`id` AS `id`, `reservation`.`date` AS `date`, `reservation`.`comment` AS `comment`, `reservation`.`users_id` AS `users_id`, `reservation`.`equipments_id` AS `equipments_id` FROM `reservations` AS `reservation` INNER JOIN `users` ON (`reservation`.`users_id` = `users`.`id`) WHERE `users_id` = '2' AND `date` > '2013/06/03' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 22:19:23 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_Reservati...', Array)
#1 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\EquipmentRentalSSST\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\currentrentals.php(17): Kohana_ORM->find_all()
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_currentrentals->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_currentrentals))
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\EquipmentRentalSSST\modules\database\classes\Kohana\Database\Query.php:251
2013-06-03 22:20:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\admin\currentrentals.php [ 22 ] in :
2013-06-03 22:20:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:23:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: futureReservations ~ APPPATH\views\admin\pastrentals.php [ 17 ] in C:\wamp\www\EquipmentRentalSSST\application\views\admin\pastrentals.php:17
2013-06-03 22:23:46 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\views\admin\pastrentals.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Equ...', 17, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#2 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\EquipmentRentalSSST\application\views\admin\template.php(35): Kohana_View->__toString()
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(61): include('C:\wamp\www\Equ...')
#6 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Equ...', Array)
#7 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_pastrentals))
#11 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\EquipmentRentalSSST\application\views\admin\pastrentals.php:17
2013-06-03 22:31:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\admin\addequipment.php [ 16 ] in :
2013-06-03 22:31:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:31:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\admin\addequipment.php [ 16 ] in :
2013-06-03 22:31:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:32:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\admin\addequipment.php [ 16 ] in :
2013-06-03 22:32:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:38:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\admin\addequipment.php [ 16 ] in :
2013-06-03 22:38:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:40:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: inputDate ~ APPPATH\classes\Controller\admin\addequipment.php [ 18 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:40:20 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 18, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_addequipment->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_addequipment))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:43:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: inputDate ~ APPPATH\classes\Controller\admin\addequipment.php [ 18 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:43:00 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 18, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_addequipment->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_addequipment))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:43:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: inputDate ~ APPPATH\classes\Controller\admin\addequipment.php [ 18 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:43:13 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 18, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_addequipment->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_addequipment))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:43:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: active ~ APPPATH\classes\Controller\admin\addequipment.php [ 18 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:43:59 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 18, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_addequipment->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_addequipment))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:47:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: active ~ APPPATH\classes\Controller\admin\editequipment.php [ 35 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\editequipment.php:35
2013-06-03 22:47:29 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\editequipment.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 35, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_editequipment->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_editequipment))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\editequipment.php:35
2013-06-03 22:49:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: inputName ~ APPPATH\classes\Controller\admin\addequipment.php [ 21 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:21
2013-06-03 22:49:08 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 21, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_addequipment->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_addequipment))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:21
2013-06-03 22:49:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: active ~ APPPATH\classes\Controller\admin\addequipment.php [ 18 ] in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:49:47 --- DEBUG: #0 C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Equ...', 18, Array)
#1 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Controller.php(84): Controller_Admin_addequipment->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_addequipment))
#4 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\EquipmentRentalSSST\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\EquipmentRentalSSST\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\EquipmentRentalSSST\application\classes\Controller\admin\addequipment.php:18
2013-06-03 22:51:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\admin\addequipment.php [ 22 ] in :
2013-06-03 22:51:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:51:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or namespace (T_NAMESPACE) or \\ (T_NS_SEPARATOR) ~ APPPATH\classes\Controller\admin\addequipment.php [ 21 ] in :
2013-06-03 22:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:52:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$', expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\admin\addequipment.php [ 21 ] in :
2013-06-03 22:52:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:53:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$', expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\admin\addequipment.php [ 21 ] in :
2013-06-03 22:53:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:53:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$newEquipment' (T_VARIABLE), expecting catch (T_CATCH) ~ APPPATH\classes\Controller\admin\addequipment.php [ 22 ] in :
2013-06-03 22:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:53:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting catch (T_CATCH) ~ APPPATH\classes\Controller\admin\addequipment.php [ 20 ] in :
2013-06-03 22:53:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:53:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\admin\addequipment.php [ 21 ] in :
2013-06-03 22:53:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:53:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or namespace (T_NAMESPACE) or \\ (T_NS_SEPARATOR) ~ APPPATH\classes\Controller\admin\addequipment.php [ 21 ] in :
2013-06-03 22:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:53:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$e' (T_VARIABLE), expecting identifier (T_STRING) or namespace (T_NAMESPACE) or \\ (T_NS_SEPARATOR) ~ APPPATH\classes\Controller\admin\addequipment.php [ 21 ] in :
2013-06-03 22:53:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 22:53:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"e"' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or namespace (T_NAMESPACE) or \\ (T_NS_SEPARATOR) ~ APPPATH\classes\Controller\admin\addequipment.php [ 21 ] in :
2013-06-03 22:53:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :