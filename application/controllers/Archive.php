<?php
class Archive extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('archive_model');
    }
    function index(){
        $this->load->view('product_view');
    }
 
    function archive_data(){
        $data=$this->archive_model->archive_list();

        // var_dump(data);
        // die();

        echo json_encode($data);
    }
 
    function save(){
        $data=$this->archive_model->save_product();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->archive_model->delete_archive();
        echo json_encode($data);
    }
 
}