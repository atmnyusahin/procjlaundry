<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends US_Controller {

	
	public function index()
	{
		$this->load->view('pelanggan');
	}
}
