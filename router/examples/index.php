<?php
require_once 'Router.php';
require_once 'NoController.php';
require_once 'Another.php';

define('DEFAULT_CONTROLLER', "NoController");
define('DEFAULT_ACTION', "index");

$router = Router::get_instance();
$router->set_route("/");

$router->set_route("/nocontroller/noaction", ['controller' => 'NoController']);
$router->set_route("/nocontroller/nocontroller", ['action' => 'without']);

$router->set_route("/another/echoes/:param", ['controller' => 'Another', 'action' => 'echoes'], ['param' => '[a-z]{3}']);
$router->set_route("/another/echoes/:param/:id", ['controller' => 'Another', 'action' => 'dump'], ['param' => '[a-z]{3}', 'id' => '[\d]{1,8}']);
$router->set_route("/another/echoes/:param/some/:id", ['controller' => 'Another', 'action' => 'dump'], ['param' => '[a-z]{3}', 'id' => '[\d]{1,8}']);
$router->set_route("/another/echoes/:param/some/:id/:more", ['controller' => 'Another', 'action' => 'dump'], ['param' => '[a-z]{3}', 'id' => '[\d]{1,8}']);
$router->run();