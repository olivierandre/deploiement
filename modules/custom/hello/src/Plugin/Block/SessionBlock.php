<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Ajoute un block session
*
* @Block(
*   id = "Session block",
*   admin_label = @Translation("Session")
* )
*/
class SessionBlock extends BlockBase {
  // Implémente build() de BlockBase
  public function build() {
    $nbsession = \Drupal::database()
      ->select('sessions', 's')
      ->countQuery()
      ->execute()
      ->fetchField();

    $t_arr = array(
      '%nbsession' => $nbsession,
    );
    $build = array(
      '#markup' => $this->t('Nb sessions: %nbsession', $t_arr),
      '#cache' => array(
        'keys' => ['session'],
        'max-age' => 10,
      ),
    );

    return $build;
  }
}
