<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
	
	public function index(){
	
		$this->load->template('news', $this->data);
	}
	
}
