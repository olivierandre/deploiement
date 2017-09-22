<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloTableController extends ControllerBase {
  public function content($node) {
    $query = \Drupal::database()
      ->select('hello_node_history', 'h')
      ->fields('h', [
        'uid',
        'update_time'
      ])
      ->condition('nid', $node)
      ->execute()
      ->fetchAll();

    foreach($query as $q) {
      $uname = \Drupal::entityTypeManager()
        ->getStorage('user')
        ->load($q->uid)
        ->getDisplayName();
      $date = \Drupal::service('date.formatter')
        ->format($q->update_time);
      $rows[] = [$uname, $date];
    }

    // kint($rows); exit();

    $build = [
      '#theme' => 'table',
      '#header' => [
        $this->t('Author'),
        $this->t('Update time'),
      ],
      '#rows' => $rows,
      '#cache' => [
        'keys' => ['hello_node_history_pager:'.$param],
        'tags' => ['node:'.$param],
        'contexts' => ['url'],
      ],
    ];

    return $build;
  }
}
