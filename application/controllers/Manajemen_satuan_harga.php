<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_satuan_harga extends US_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_Satuan');
    }


	public function index()
	{
		$this->load->view('satuan');
	}


	function ajaxTable()
	{
		$list = $this->M_Satuan->tampil();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row[] = $key->nama;
        
            $row[] = '
            <a href="#" data-toggle="tooltip" data-original-title="Edit" onclick="show_edit('.$key->id_satuan.')"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
            <a href="javascriptvoid:" data-toggle="tooltip" data-original-title="Hapus" onclick="hapus('.$key->id_satuan.')"> <i class="fa fa-close text-danger"></i> </a>

            ';
            $data[] = $row;
            
        }
        $output = array("draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_Satuan->count_all(),
                        "recordsFiltered" => $this->M_Satuan->count_filtered(),
                        "data" => $data);

        echo json_encode($output);
	}
}
