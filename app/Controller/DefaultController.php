<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

}



// class ArticlesController extends Controller {
// 	public function afficher() {
// 		$this -> show('articles/home');
// 	}
// }
