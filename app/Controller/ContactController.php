<?php

namespace Controller;

use \W\Controller\Controller;
use \PHPMailer;

class ContactController extends Controller
{

	/**
	 * Page loader
	 */
	public function contact()
	{
		
		$this->show('Contact/contact', ['post' => $_POST]);
		
		
	}

}