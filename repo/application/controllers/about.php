<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {
	
	public function index(){
		
		
		$this->load->template('about', $this->data);
	}
	
}
