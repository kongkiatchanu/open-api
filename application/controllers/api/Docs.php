<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';


class Docs extends REST_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
       
        $this->methods['users_get']['limit'] = 5000; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 1000; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    function check_origin()
    {
        // $base_url = 'https://open-api.cmuccdc.org';
        // if(@substr($_SERVER['HTTP_REFERER'],0,28)!=$base_url){
        //     $data = array(
        //         "status" => false,
        //         "message" => "Invalid API key"
        //     );
        //     $this->response($data, 200);
        // }
    }

    public function index_get()
    {
        $this->check_origin();
        $data = array(
            "status" => TRUE,
            "message" => "welcome CMUCCDC AI APIs Datas :)"
        );
        $this->response($data, 200);
    }


}