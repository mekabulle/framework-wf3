<?php
namespace Controller;

use \W\Controller\Controller;

class ArticleController extends controller {
  public function afficherArticle() {

    $this -> show('article/view_article');

  }
}


 ?>
