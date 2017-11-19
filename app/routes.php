<?php
	
	$w_routes = array(
		/*['GET', '/', 'Default#home', 'default_home'],*/
		['GET', '/', 'Accueil#accueil', 'accueil'],
		['GET||POST', '/contact', 'Contact#contact', 'contact'],
		['GET', '/creation-web', 'Creation#creation', 'developpement-web'],
		['GET', '/smartphone-et-tablette', 'Smartphone#smartphone', 'smartphone'],
		['GET', '/maintenance-informatique', 'Maintenance#maintenance', 'maintenance'],
	);