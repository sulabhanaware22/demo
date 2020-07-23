<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Main extends REST_Controller {
    function __construct()
	{
        parent::__construct();
        $this->load->model('category');
       // $this->load->helper('custom_helper');
	}
	public function index()
	{
     
    }
    public function categories_get(){
        $result= $this->category->getAllCategories();
        echo json_encode($result);
        exit();
    }
    public function category_get(){
     $id= $this->input->get('id');
     $data=array("id" => $id);
     $result= $this->category->getCategory($data);
     echo json_encode($result);
     exit();
    }
    public function category_post(){
     $post_data = get_json_data();
     exit();
    }
    public function category_php(){

    }
}
