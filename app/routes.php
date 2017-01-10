<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		[
			"GET|POST", //la ou les méthodes HTTP de la requête
			"/user/",		//le masque d'URL à associer
			"Default#user",	//le nom du contrôleur et le nom de la méthode à appeler
			"default_user"	//le nom de cette route-ci
		],
		["GET|POST", "/inscriptionUser","User#inscriptionUser", "inscriptionUser"],
		["GET|POST", "/loginUser","Login#loginUser", "loginUser"],
		["GET|POST", "/article","Article#afficherArticle", "article"],



	);
