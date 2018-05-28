<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
class M_pelanggan extends CI_Model {


	var $table = 'Pelanggan';
    var $column = array('nama','alamat','nomor_telepon'); 
    var $order = array('id_pelanggan' => 'desc');

    private function _get_datatables_query()
    {
        $this->db->from($this->table);
        $this->db->where("is_delete", 0);

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
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    public function count_all()
    {
        $this->db->from($this->table);
        $this->db->Where('is_delete', 0);
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