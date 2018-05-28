<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
class M_transaksi extends CI_Model {


	var $table = 'Transaksi';
    var $column = array('id_pelanggan','id_satuan','id_paket','tgl_terima','tgl_selesai','tgl_keluar','nama_pelanggan'); 
    var $order = array('id_transaksi' => 'desc');

    private function _get_datatables_query()
    {
        $this->db->select('transaksi.*, pelanggan.nama as nama_plggn, paket.nama as nama_paket, satuan.nama as nama_satuan');
        $this->db->from($this->table);
        $this->db->join("pelanggan", "pelanggan.id_pelanggan = transaksi.id_pelanggan", "left");
        $this->db->join("paket", "paket.id_paket = paket.id_paket", "left");
        $this->db->join("satuan", "satuan.id_satuan = satuan.id_satuan", "left");
        $this->db->where("transaksi.is_delete", 0);
        $i = 0;
    
        foreach ($this->column as $item) 
        {
            if($_POST['search']['value']) 
            {
                
                if($i===0) 
                {
                    $this->db->group_start();
                    
                    
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                    
                }

                if(count($this->column) - 1 == $i)
                    $this->db->group_end();
            }
            $column[$i] = $item;
            $i++;
        }
        
        if(isset($_POST['order']))
        {
            $this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $this->db->where('transaksi.is_delete', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    public function count_all()
    {
        $this->db->from($this->table);
        $this->db->where('transaksi.is_delete', 0);
        return $this->db->count_all_results();
    }

    public function tampil()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        
        $query = $this->db->get();
        return $query->result();
    }

}