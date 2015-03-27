###How to use

``` php
$router = Router::get_instance();
$router->set_route('/'); // To default controller, and default method.
$router->set_route('/news/:id/:another/:something', ['controller' => 'home', 'action' => 'index'], ['id' => '[\d]{1,8}', 'another' => '[a-z]{3}']);
$router->set_route('/test/dependencies', ['controller' => 'Controllers_ZTest', 'action' => 'test_dependencies']);
$router->set_route('/test/gluejs', ['controller' => 'Controllers_ZTest', 'action' => 'test_glue_js']);
$router->set_route('/test/gluepack', ['controller' => 'Controllers_ZTest', 'action' => 'test_glue_pack']);
$router->set_route('/test/glueurls', ['controller' => 'Controllers_ZTest', 'action' => 'test_glue_urls']);
$router->set_route('/test/gluejs', ['controller' => 'Controllers_ZTest', 'action' => 'test_gluejs']);
$router->set_route('/test/dummy', ['controller' => 'Controllers_ZTest', 'action' => 'dummy_test']);
$router->run();
```