<?php

/**
* 
*/
class US_Controller extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$loginsession= $this->session->userdata('loginsession');

		if (!$loginsession) 
		{
			redirect('Login');
		}

	}
}