<?php
class Product_model extends CI_Model{
 
    function product_list(){
        $hasil=$this->db->get('product');
        return $hasil->result();
    }
 
    function save_product(){
        $data = array(
                'id'  => $this->input->post('id'), 
                'product_name'  => $this->input->post('product_name'), 
                'total' => $this->input->post('total'), 
                'color' => $this->input->post('color'), 
                'purchase_date' => $this->input->post('purchase_date'), 
                'product_condition' => $this->input->post('product_condition'), 
                'keeping_place' => $this->input->post('keeping_place'), 
            );
        $result=$this->db->insert('product',$data);
        return $result;
    }
 
    function update_product(){
        $id=$this->input->post('id');
        $product_name=$this->input->post('product_name');
        $total=$this->input->post('total');
        $color=$this->input->post('color');
        $purchase_date=$this->input->post('purchase_date');
        $product_condition=$this->input->post('product_condition');
        $keeping_place=$this->input->post('keeping_place');
 
        $this->db->set('product_name', $product_name);
        $this->db->set('total', $total);
        $this->db->set('color', $color);
        $this->db->set('purchase_date', $purchase_date);
        $this->db->set('product_condition', $product_condition);
        $this->db->set('keeping_place', $keeping_place);
        $this->db->where('id', $id);
        $result=$this->db->update('product');
        return $result;
    }
 
    function delete_product(){
        $product_code=$this->input->post('id');
        $this->db->where('id', $product_code);
        $result=$this->db->delete('product');
        return $result;
    }
     
}