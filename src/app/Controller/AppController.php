<?php

/**
 * PHP-Framework - Mark2
 * AppController
 * 
 * @copylight Satoru-Nakajima
 */

namespace App\Controller;

use Mk2\Libraries\Controller;

class AppController extends Controller{

	public $Template="default";
	public $autoRender=true;
	
	public function handleBefore(){
		/**
		 * handle before area
		 */
	}
	
	public function handleAfter($input){
		/**
		 * handle after area
		 */
	}

}