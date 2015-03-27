<?php
class Another {
  public function index() {
    echo "index Another";
  }
  public function echoes($params) {
    echo $params['param'];
  }
  public function dump($params) {
    var_dump($params);
  }
} 