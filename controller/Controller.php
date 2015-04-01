<?php
class Controller {
  const PREFIX_LENGTH = 11;
  const VIEWS_DIRECTORY = "Views";
  const APP_ROOT = "/app/root/";

  private $vars = [];
  private $view;

  public function __construct() {
//    if your class is called Controller_Something we cut the Controller_ and obtain the name of the default view in
//    order to set the view, you can change this if you want in the next line.
    $this->set_view(substr(get_called_class(), self::PREFIX_LENGTH));
  }

  public function set_vars(Array $args) {
    $this->vars = $args;
  }

  public function render($filename = false) {
    if($filename) $this->set_view($filename);
//    $view is used in the template $this->view.'.php';
    $view = (object) $this->vars;
    require $this->view.'.php';
  }

  public function set_view($filename) {
    $this->view = implode(DIRECTORY_SEPARATOR, [self::APP_ROOT, self::VIEWS_DIRECTORY, strtolower($filename)]);
  }
}