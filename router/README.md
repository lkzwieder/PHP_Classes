How to use
===

This router class was made with a few things in mind:
- Simplicity
- Legibility
- Performance
- Built-in filters

The result was 43 lines, 3 public methods and I think the mission was accomplished.

In order to use this class properly you need to instantiate, declare routes, and run!

###How this work


###Instantiate:
This part is easy, the class use a singleton pattern here, because obvious reasons. Just instantiate...
``` php
$router = Router::get_instance();
```

###Declare:
This is the "tricky" part.
In order to set a route we need first to set a few constant:
- DEFAULT_CONTROLLER
- DEFAULT_ACTION

DEFAULT_CONTROLLER: When no controller is declared for a given route, the router invokes this controller.
DEFAULT_ACTION: When no action/method is declared for a given route, the router invokes this method for the given controller.

``` php
$router->set_route(String $route, Array $handler, Array $options);
```

The first parameter, $route, is required.


``` php
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