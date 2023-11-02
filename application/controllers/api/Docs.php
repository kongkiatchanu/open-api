<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';


class Docs extends REST_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
       
        $this->methods['users_get']['limit'] = 1; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 1; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 1; // 50 requests per hour per user/key
    }



    public function index_get()
    {
        $data = array(
            "status" => TRUE,
            "message" => "welcome CMUCCDC AI APIs Datas :)"
        );
        $this->response($data, 200);
    }


}