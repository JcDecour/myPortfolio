<?php

namespace Controller;

use \W\Controller\Controller;


class SmartphoneController extends Controller
{

	/**
	 * Page loader
	 */
	public function smartphone()
	{
		
		$this->show('Smartphone/smartphone', ['get' => $_GET]);
		
		
	}

}