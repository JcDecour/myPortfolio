<?php

namespace Controller;

use \W\Controller\Controller;

class MaintenanceController extends Controller
{

	/**
	 * Page loader
	 */
	public function Maintenance()
	{
		
		$this->show('Maintenance/maintenance', ['get' => $_GET]);
		
		
	}

}