<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content($param) {
    $name = $this->currentUser()->getDisplayName();
    if($param != '') $name = $param;
    $t_arr = array(
      "%sir" => $name,
    );
    $ret = array(
      "#markup" => $this->t('Hello %sir', $t_arr),
    );

    return $ret;
  }
}
