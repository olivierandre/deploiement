<?php
// cf. https://symfony.com/doc/current/components/http_foundation.html#creating-a-json-response

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class HelloJsonController extends ControllerBase {
  public function content() {
    $arr = array(
      'data' => array(
        'foo' => 'foo',
        'bar' => 'bar',
        'hello' => 'hello',
      ),
    );
    $response = new JsonResponse($arr);

    return $response;
  }
}
