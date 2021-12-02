<?php

namespace Drupal\load_node\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\RedirectResponse;


class RefreshController extends ControllerBase
{

  /**
   * Display MaPage.
   *
   * @return array
   */
  public function Refresh($nid)
  {
    $node = Node::load($nid);
    $node->set('created', time());
    $node->save();
    return new RedirectResponse('/'); // front page

  }

}
