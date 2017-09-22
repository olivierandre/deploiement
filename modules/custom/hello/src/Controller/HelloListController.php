<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloListController extends ControllerBase {
  public function content() {
    $items = [];
    $storage = \Drupal::entityTypeManager()->getStorage('node');
    // $ids = \Drupal::entityQuery('node')->execute();
    // $ids = $storage->getQuery()->execute(); //same
    $ids = $storage->getQuery()->pager('10')->execute(); //same with pager
    $nodes = $storage->loadMultiple($ids);

    foreach($nodes as $node) {
      $items[] = $node->toLink();
    }

    $list = [
      '#theme' => 'item_list',
      '#items' => $items,
    ];

    $pager = [
      '#type' => 'pager',
    ];

    $build = [
      'list' => $list,
      'pager' => $pager,
    ];

    return $build;
  }
}
