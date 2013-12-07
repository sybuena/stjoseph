<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends MY_Controller {
	
	public function index(){
	
		$this->load->template('reservation', $this->data);
	}
	
}
