<?php

namespace Controller;

use \W\Controller\Controller;

class CreationController extends Controller
{

	/**
	 * Page loader
	 */
	public function creation()
	{
		
		$this->show('Creation/creation', ['get' => $_GET]);
		
		
	}

}