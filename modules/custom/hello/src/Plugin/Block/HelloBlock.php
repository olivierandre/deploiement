<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Ajoute un block hello
*
* @Block(
*   id = "Hello block",
*   admin_label = @Translation("Hello")
* )
*/
class HelloBlock extends BlockBase {
  // Implémente build() de BlockBase
  public function build() {
    $date = \Drupal::service('date.formatter')->format(time(), 'custom', 'h:m:s');
    $t_arr = array(
      '%date' => $date,
    );
    $build = array(
      '#markup' => $this->t('Hello block, %date', $t_arr),
      '#cache' => array(
        'keys' => ['hello'],
        'max-age' => 10,
      ),
    );

    return $build;
  }
}
