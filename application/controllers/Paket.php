<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends US_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_paket');
    }

	public function index()
	{
		$this->load->view('paket');
	}

	function ajaxTable()
	{
		$list = $this->M_paket->tampil();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row[] = $key->nama;
            $row[] = $key->harga;
            $row[] = $key->jangka_waktu." Hari";
            
            $row[] = '
            <a href="#" data-toggle="tooltip" data-original-title="Edit" onclick="show_edit('.$key->id_paket.')"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
            <a href="javascriptvoid:" data-toggle="tooltip" data-original-title="Hapus" onclick="hapus('.$key->id_paket.')"> <i class="fa fa-close text-danger"></i> </a>

            ';
            $data[] = $row;
            
        }
        $output = array("draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_paket->count_all(),
                        "recordsFiltered" => $this->M_paket->count_filtered(),
                        "data" => $data);

        echo json_encode($output);
	}
}
