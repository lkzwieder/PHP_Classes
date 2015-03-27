Autoload.php
===

This autoloader class was made with a few things in mind:
- Simplicity
- Legibility
- Performance

The result was less than 40 lines.

In order to use this class properly you need to instantiate, and set the root path (or root paths) with the set_path method.

``` php
$this->set_path(ROOT);
$this->set_path(APP_ROOT);
```

Why this?, because very often you need to have multiple roots or the class files aren't at the same level of Autoload.php
If you have this structure ```/app/Controller/Class.php``` and in your code you do ```new Controller_Class()``` you need
to set the root path, so...

``` php
require_once 'Autoload.php';
$autoloader = Autoload::get_instance();
$autoloader->set_path(__DIR__);
```

if we have Autoload.php in the root (I do not recommend this), I prefer something like this

``` php
require_once '/framework/Autoload.php';
$autoloader = Autoload::get_instance();
$autoloader->set_path(__DIR__.DIRECTORY_SEPARATOR."framework");
```

###A few things about this class
- If you try to instantiate a class named Controllers_Home this autoloader will try to request Controllers/Home.php file. Same with Controllers\Home