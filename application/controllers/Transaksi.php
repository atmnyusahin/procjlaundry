<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends US_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_transaksi');
    }

	public function index()
	{
		$this->load->view('transaksi');
	}

	function ajaxTable()
	{
		$list = $this->M_transaksi->tampil();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $row = array();
            $row[] = $key->nama_plggn;
            $row[] = $key->nama_satuan;
            $row[] = $key->nama_paket;
            $row[] = $key->tgl_terima;
            $row[] = $key->tgl_selesai;
            $row[] = $key->tgl_keluar;
            
            $row[] = '
            <a href="#" data-toggle="tooltip" data-original-title="Edit" onclick="show_edit('.$key->id_transaksi.')"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
            <a href="javascriptvoid:" data-toggle="tooltip" data-original-title="Hapus" onclick="hapus('.$key->id_transaksi.')"> <i class="fa fa-close text-danger"></i> </a>

            ';
            $data[] = $row;
            
        }
        $output = array("draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_transaksi->count_all(),
                        "recordsFiltered" => $this->M_transaksi->count_filtered(),
                        "data" => $data);

        echo json_encode($output);
	}
}
