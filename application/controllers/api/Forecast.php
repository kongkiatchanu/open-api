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

    public function daily_get(){
        $url = 'https://rcces.soc.cmu.ac.th:1443/pm25/v1/getDaily';
        $json = file_get_contents($url);
        $obj = json_decode($json);

        $today = date('Y-m-d');
        $today_1 = date('Y-m-d', strtotime('+1 day', strtotime($today)));
        $today_2 = date('Y-m-d', strtotime('+2 day', strtotime($today)));
        $today_3 = date('Y-m-d', strtotime('+3 day', strtotime($today)));
        
        $ar_data = array();

        if($obj->air_quality!=null){
            $data = $obj->air_quality;
            foreach($data as $k=>$v){
                if($v->StationID!=0){
                    if (in_array($v->StationID, $ar_data)){
                        $ar_data[$v->StationID]['forecast'][$v->ForecastDate] = $v->PM25;
                    }else{
                        $ar_data[$v->StationID]['StationID']= $v->StationID;
                        $ar_data[$v->StationID]['Latitude']= $v->Latitude;
                        $ar_data[$v->StationID]['Longitude']= $v->Longitude;
                        $ar_data[$v->StationID]['forecast'][$v->ForecastDate] = $v->PM25;
                    }
                }
            }
        }

        echo '<pre>';
        print_r($ar_data);
        echo '</pre>';
       



    }

}