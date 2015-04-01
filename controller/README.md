Controller.php
===

This controller class was made with a few things in mind:
- Simplicity
- Legibility

This is simply a view handler in which you can pass parameters and render an HTML with some PHP injections through the
``` $view ``` object.

The proper use for this class would be something like this:

``` php
class Controller_Home extends Controller {
    public function index($title) {
        $this->set_vars([
            'title' => $title
        ]);
        $this->render();
    }

    public function anotherStuff() {
        // Another stuff here
    }
}
```

And the template would be like this:

``` php
<!DOCTYPE html>
<html>
<head>
    <title><?=$view->title?></title>
</head>
<body>
    <h1>This hello world has title!</h1>
</body>
</html>
```