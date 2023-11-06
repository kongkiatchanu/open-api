<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

//https://rcces.soc.cmu.ac.th:1443/pm25/v1/getDaily
//https://rcces.soc.cmu.ac.th:1443/pm25/v1/getHourly

class Forecast extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
    }



    public function index_get()
    {
        $data = array(
            "status" => TRUE,
            "message" => "welcome Forcast APIs Datas :)"
        );
        $this->response($data, 200);
    }


}