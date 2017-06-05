<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page loader
	 */
	public function home()
	{
		
		$this->show('default/home');

		
	}

}