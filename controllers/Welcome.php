<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends COACH_Controller {

	protected function _application_init(){

		
		$this->page_value = array(
			'site'=>array(),
			'page'=>array(),
			'error'=>array(),
			'css'=>array(),
			'js'=>array(),
		);
		$this->site_value = array();

	}

}
