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
		
		$this->show('smartphone/smartphone', ['get' => $_GET]);
		
		
	}

}
