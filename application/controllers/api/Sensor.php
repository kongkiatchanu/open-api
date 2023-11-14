<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';


class Sensor extends REST_Controller
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

    public function stations_get(){

        $url = 'https://www-old.cmuccdc.org/assets/api/haze/pwa/json/stations_temp.json';
        $rs = json_decode(file_get_contents($url));
        $this->response($rs, 200);

    }

    public function stationsAllSensor_get(){

        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		if ( ! $stations = $this->cache->get('stations'))
		{
            $url = 'https://www-old.cmuccdc.org/api2/dustboy/stations';
			$stations = json_decode(file_get_contents($url));

			$this->cache->save('stations', $stations, 600);
        }
        header('Content-Type: application/json; charset=utf-8');
		echo json_encode($stations);
    }

}