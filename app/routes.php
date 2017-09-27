<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/accueil', 'Accueil#accueil', 'accueil'],
		['GET||POST', '/contact', 'Contact#contact', 'contact'],
		['GET', '/creation-web', 'Creation#creation', 'creation'],
		['GET', '/smartphone-et-tablette', 'Smartphone#smartphone', 'smartphone'],
	);