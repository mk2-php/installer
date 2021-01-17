<?php

/**
 * PHP-Framework - Mark2
 * MainController
 * 
 * @copylight Satoru-Nakajima
 */

namespace App\Controller;

use App\Controller\AppController;

class MainController extends AppController{

	public function handleBefore(){
		/**
		 * handle before area
		 */
	}
	
	public function handleAfter(){
		/**
		 * handle after area
		 */
	}
		
	public function index(){
		$this->Response->setData("title","Mark2 PHP FW");
	}

}