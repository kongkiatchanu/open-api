<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';


class Docs extends REST_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
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