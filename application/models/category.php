<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model{

    function __construct()
	{
        parent::__construct();
        $this->load->database();
	}
    public function getAllCategories(){
    $this->db->select('id,name');
    $result= $this->db->get('category');
    if($result->num_rows() > 0){
        $return = $result->result_array();
        return $return;
    }else{
        return 0;
    }
    exit();
    }
	public function getCategory($data=''){
     //   print_r($data);
      //  exit();
    $this->db->select('id,name');
    $this->db->where('C.id',$data['id']);
    $result= $this->db->get('category'. ' C');
    if($result->num_rows() > 0){
        $return = $result->first_row('array');
        return $return;
    }else{
        return 0;
    }
    exit();
    }
}
