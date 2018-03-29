<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_authentication');
	}

	function index() {
		$this->load->view('login');
	}

	function submit() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = $this->M_authentication->authentication($username,$password);
		if ($data['status']==false) {
			 $this->session->set_flashdata('flash_msg', '<div style="margin: 15px 15px 10px; border: 1px solid red; padding: 10px;"><b>Error, </b>silahkan masukkan username dan password<br>dengan benar</div>');
            	redirect('Login');
		}

		else

		{
			if ($data['data']->keaktifan=='0') {
				$this->session->set_flashdata('flash_msg', '<div style="margin: 15px 15px 10px; border: 1px solid red; padding: 10px;"><b>Mohon maaf anda tidak bisa login, </b>Status anda saat ini tidak aktif!</div>');
            	redirect('Login');
			}

			else
			{
				$loginsession = array(
				'id_user' => $data['data']->id_user, 
				'nama' => $data['data']->nama,
				'alamat' => $data['data']->alamat,
				'no_telpon' => $data['data']->no_telpon,
				'keaktifan' => $data['data']->keaktifan,
				'jabatan' => $data['data']->jabatan,
				'username' => $data['data']->username,
				'pswd' => $data['data']->pswd);
				$this->session->set_userdata('loginsession',$loginsession);

				redirect('Home');
			}

			
		}

	}
	public function logout(){
        $this->session->unset_userdata('loginsession');
        $this->session->sess_destroy();
        redirect('Login');
    }
}