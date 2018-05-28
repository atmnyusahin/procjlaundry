<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends US_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_pelanggan');
    }


	public function index()
	{
		$this->load->view('pelanggan');
	}


	function ajaxTable()
	{
		$list = $this->M_pelanggan->tampil();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $key->nama;
            $row[] = $key->alamat;
            $row[] = $key->no_telpon;
            $row[] = $key->email;
            
            $row[] = '
            <a href="#" data-toggle="tooltip" data-original-title="Edit" onclick="show_edit('.$key->id_pelanggan.')"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
            <a href="javascriptvoid:" data-toggle="tooltip" data-original-title="Hapus" onclick="hapus('.$key->id_pelanggan.')"> <i class="fa fa-close text-danger"></i> </a>

            ';
            $data[] = $row;
            
        }
        $output = array("draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_pelanggan->count_all(),
                        "recordsFiltered" => $this->M_pelanggan->count_filtered(),
                        "data" => $data);

        echo json_encode($output);
	}
}
