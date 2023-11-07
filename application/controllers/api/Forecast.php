<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
//ref APIs ::
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

    public function daily_get()
    {
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
       
        if (!$daily_data = $this->cache->get('daily_forecast')) {
            $url = 'https://rcces.soc.cmu.ac.th:1443/pm25/v1/getDaily';
            $json = file_get_contents($url);
            $obj = json_decode($json);
            $ar_data = array();

            if ($obj->air_quality != null) {
                $data = $obj->air_quality;
                foreach ($data as $k => $v) {
                    if ($v->StationID != 0) {
                        if (in_array($v->StationID, $ar_data)) {
                            $ar_data[$v->StationID]['Forecast'][$v->ForecastDate] = $v->PM25;
                        } else {
                            $ar_data[$v->StationID]['StationID'] = $v->StationID;
                            $ar_data[$v->StationID]['Latitude'] = $v->Latitude;
                            $ar_data[$v->StationID]['Longitude'] = $v->Longitude;
                            $ar_data[$v->StationID]['Forecast'][$v->ForecastDate] = $v->PM25;
                        }
                    }
                }
            }
            $this->cache->save('daily_forecast', $ar_data, 360);
            $daily_data = $ar_data;
        }
        $this->response($daily_data, 200);
    }

    public function hourly_get(){
        set_time_limit(0);
        $url = 'https://rcces.soc.cmu.ac.th:1443/pm25/v1/getHourly';
        $json = file_get_contents($url);
        $obj = json_decode($json);

        echo '<pre>';
        print_r($obj);
        echo '</pre>';

    }

}