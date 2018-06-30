<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiluser extends US_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_profiluser');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('profiluser');
	}
	function ajaxTable()
	{
		$list = $this->M_profiluser->tampil();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row[] = $key->nama;
            $row[] = $key->username;
            $row[] = $key->alamat;
            $row[] = $key->no_telpon;
            $row[] = $key->keaktifan;
            $row[] = $key->jabatan;
            
            $row[] = '
            <a href="#" data-toggle="tooltip" data-original-title="Edit" onclick="show_edit('.$key->id_user.')"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
            <a href="javascriptvoid:" data-toggle="tooltip" data-original-title="Hapus" onclick="hapus('.$key->id_user.')"> <i class="fa fa-close text-danger"></i> </a>

            ';
            $data[] = $row;
            
        }
        $output = array("draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_profiluser->count_all(),
                        "recordsFiltered" => $this->M_profiluser->count_filtered(),
                        "data" => $data);

        echo json_encode($output);
	}
}
