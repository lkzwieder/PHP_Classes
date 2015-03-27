Router.php
===

This router class was made with a few things in mind:
- Simplicity
- Legibility
- Performance
- Built-in filters

The result was less than 50 lines, 3 public methods and I think the mission was accomplished.

In order to use this class properly you need to instantiate, declare routes, and run!

###Examples
In the examples folder.

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
Param | Type | Required | How it work
----        | ----      | ----  | ----
$route      | String    | yes   | You can set the route here, always start with /
$handler    | Array     | no    | It can have the 'controller' and 'action' to be triggered when a request match the declared route, if no controller nor action, defaults are invoked.
$options    | Array     | no    | This is when you can filter the params, if those params are unmet defaults are invoked.

### Run!
So, the only thing you need to do know is call to run.

``` php
$router->run():
```

###A few things about this class
- If an user request an undeclared route, default controller and action are invoked.
- If a request match two different declared routes, the first one is triggered.
- Params are passed to the method in an associative array with all $_GET, $_POST and $_COOKIE