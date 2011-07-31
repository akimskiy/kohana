<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-07-31 07:13:50 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-07-31 07:13:50 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /var/www/system/classes/kohana/view.php(30): Kohana_View->__construct('site', NULL)
#2 /var/www/system/classes/kohana/controller/template.php(33): Kohana_View::factory('site')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /var/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Hello))
#5 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-31 07:28:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/hello.php [ 8 ]
2011-07-31 07:28:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/hello.php [ 8 ]
--
#0 /var/www/application/classes/controller/hello.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 8, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-31 07:30:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/hello.php [ 9 ]
2011-07-31 07:30:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/hello.php [ 9 ]
--
#0 /var/www/application/classes/controller/hello.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 9, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-31 07:31:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/controller/hello.php [ 9 ]
2011-07-31 07:31:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/controller/hello.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-31 07:32:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/hello.php [ 9 ]
2011-07-31 07:32:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/hello.php [ 9 ]
--
#0 /var/www/application/classes/controller/hello.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 9, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-31 07:32:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/hello.php [ 9 ]
2011-07-31 07:32:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/hello.php [ 9 ]
--
#0 /var/www/application/classes/controller/hello.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 9, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-31 07:32:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH/classes/controller/hello.php [ 9 ]
2011-07-31 07:32:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH/classes/controller/hello.php [ 9 ]
--
#0 /var/www/application/classes/controller/hello.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 9, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-31 07:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-31 07:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-31 07:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-31 07:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-31 07:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-31 07:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}