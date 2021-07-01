<?php

/**
 * ===================================================
 * 
 * PHP Framework "Mk2"
 *
 * AppController
 * 
 * URL : https://www.mk2-php.com/
 * 
 * Copylight : Nakajima-Satoru 2021.
 *           : Sakaguchiya Co. Ltd. (https://www.teastalk.jp/)
 * 
 * ===================================================
 */

namespace App\Controller;

// The inheritance based on "Controller" use.
use Mk2\Libraries\Controller;

class AppController extends Controller{

	public $Template="default";
	public $autoRender=true;
	
	public function handleBefore(){
		// handle before area
	}
	
	public function handleAfter($input){
		// handle after area
	}

}