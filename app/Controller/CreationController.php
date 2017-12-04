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
		
		$this->show('creation/creation', ['get' => $_GET]);
		
		
	}

}
