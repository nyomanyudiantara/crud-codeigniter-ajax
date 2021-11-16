<?php
class Archive_model extends CI_Model{
 
    function archive_list(){
        $hasil=$this->db->get('archive');
        return $hasil->result();
    }
 
    function save_product(){
        $data = array(
                'id'  => $this->input->post('id'), 
                'product_name'  => $this->input->post('product_name'), 
                // 'total' => $this->input->post('total'), 
                // 'color' => $this->input->post('color'), 
                // 'purchase_date' => $this->input->post('purchase_date'), 
                // 'product_condition' => $this->input->post('product_condition'), 
                // 'keeping_place' => $this->input->post('keeping_place'), 
            );
        $result=$this->db->insert('archive',$data);
        return $result;
    }
 
    function delete_archive(){
        $archive_id=$this->input->post('id');
        $this->db->where('id', $archive_id);
        $result=$this->db->delete('archive');
        return $result;
    }
     
}