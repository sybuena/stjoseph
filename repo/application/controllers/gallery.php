<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {
	
	public function index(){
		
		
		$this->load->template('gallery', $this->data);
	}
	
}
