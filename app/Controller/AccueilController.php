<?php
namespace Controller;
use \W\Controller\Controller;
class AccueilController extends Controller
{
	/*page d'accueil*/

	public function accueil()
	{
		$this->show('accueil/accueil');
	}
}
