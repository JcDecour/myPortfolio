<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/accueil', 'Accueil#accueil', 'accueil'],
		['GET||POST', '/contact', 'Contact#contact', 'contact'],
	);