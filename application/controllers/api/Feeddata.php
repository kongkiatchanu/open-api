<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
//ref APIs ::
//https://rcces.soc.cmu.ac.th:1443/pm25/v1/getDaily
//https://rcces.soc.cmu.ac.th:1443/pm25/v1/getHourly

class Feeddata extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index_get()
    {
        $data = array(
            "status" => TRUE,
            "message" => "welcome CMUCCDC APIs Datas :)"
        );
        $this->response($data, 200);
    }

    function standard_api($val, $type)
	{
		$point = 0;
		$data = array();
		if ($type == "us_aqi") {
			$ar_color = array(1 => '0, 153, 107', '253,192,78', '235, 132, 63', '205,0,0', '129, 21, 185', '160, 7, 54', '160, 7, 54');
			$ar_icon = array(1 => 'us-dust-boy-01', 'us-dust-boy-02', 'us-dust-boy-03', 'us-dust-boy-04', 'us-dust-boy-05', 'us-dust-boy-06', 'us-dust-boy-07');
			$ar_title = array(
				1 =>
				'คุณภาพอากาศดี',
				'คุณภาพอากาศปานกลาง',
				'คุณภาพอากาศไม่ดีต่อกลุ่มเสี่ยง',
				'คุณภาพอากาศไม่ดี',
				'คุณภาพอากาศไม่ดีอย่างยิ่ง',
				'คุณภาพอากาศอันตราย',
				'คุณภาพอากาศอันตราย'
			);
			$ar_caption = array(
				1 =>
				'ประชาชนสามารถทำกิจกรรมต่างๆ ได้ตามปกติ',
				'ประชาชนที่ไวต่อมลพิษมากกว่าคนทั่วไปควรลดการออกแรงหนักหรือเวลานานสังเกตอาการไอหรือหอบ, ประชาชนกลุ่มเสี่ยงและประชาชนทั่วไปสามารถใช้ชีวิตได้ปกติ',
				'ประชาชนที่ไวต่อมลพิษมากกว่าคนทั่วไปควรลดการออกแรงหนักหรือเวลานานสังเกตอาการไอหรือหอบ และควรงดกิจกรรมนอกอาคาร, ประชาชนกลุ่มเสี่ยงควรงดกิจกรรมนอกอาคารที่ใช้แรงหนักหรือเป็นเวลานาน สามารถทำกิจกรรมนอกอาคารได้ แต่ไม่ควรออกแรงมากและควรพักบ่อยๆ สังเกตอาการไอหรือหอบ, ประชาชนทั่วไปสามารถใช้ชีวิตได้ตามปกติ, โรงเรียนหรือสถานศึกษาควรลดกิจกรรมกลางแจ้งที่ใช้แรงหนักหรือเป็นเวลานานและต้องจัดเตรียมหน้ากากอนามัยและห้องสะอาดสำหรับนักเรียนที่มีความเสี่ยง',
				'ประชาชนที่ไวต่อมลพิษมากกว่าคนทั่วไปควรงดกิจกรรมนอกอาคาร, ประชาชนในกลุ่มเสี่ยงควรงดกิจกรรมนอกอาคารที่ใช้แรงหนักหรือเป็นเวลานานทำกิจกรรมในอาคารแทน หรือเลื่อนเป็นวันอื่น, ประชาชนทั่วไปควรงดกิจกรรมนอกอาคารที่ใช้แรงหนักหรือเป็นเวลานานพักบ่อยๆ, โรงเรียนหรือสถานศึกษาควรลดกิจกรรมกลางแจ้งที่ใช้แรงหนักหรือเป็นเวลานานและต้องจัดเตรียมหน้ากากอนามัยและห้องสะอาดสำหรับนักเรียนทุกคน',
				'ประชาชนที่ไวต่อมลพิษมากกว่าคนทั่วไปควรอยู่ในห้องสะอาด(Clean room), ประชาชนกลุ่มเสี่ยงควรงดกิจกรรมนอกอาคารทุกชนิด ทำกิจกรรมในอาคารแทนหรือเลื่อนเป็นวันอื่น, โรงเรียนหรือสถานศึกษางดกิจกรรมกลางแจ้งทุกชนิดและต้องจัดเตรียมหน้ากากอนามัยและห้องสะอาดสำหรับนักเรียนทุกคน',
				'ประชาชนทุกคนควรงดกิจกรรมนอกอาคารทุกชนิดทำกิจกรรมในอาคารแทน, โรงเรียนหรือสถานศึกษางดกิจกรรมกลางแจ้งทุกชนิดและต้องจัดเตรียมหน้ากากอนามัยและห้องสะอาดสำหรับนักเรียนทุกคนหรือพิจารณาปิดโรงเรียน',
				'ประชาชนทุกคนควรงดกิจกรรมนอกอาคารทุกชนิดทำกิจกรรมในอาคารแทน, โรงเรียนหรือสถานศึกษางดกิจกรรมกลางแจ้งทุกชนิดและต้องจัดเตรียมหน้ากากอนามัยและห้องสะอาดสำหรับนักเรียนทุกคนหรือพิจารณาปิดโรงเรียน'
			);
			$ar_title_en = array(
				1 =>
				'Good',
				'Moderate',
				'Unhealthy for Sensitive Groups',
				'Unhealthy',
				'Very Unhealthy',
				'Hazardous',
				'Hazardous'
			);
			$ar_caption_en = array(
				1 =>
				'Air quality is considered satisfactory, and air pollution poses little or no risk',
				'Air quality is acceptable; however, for some pollutants there may be a moderate health concern for a very small number of people who are unusually sensitive to air pollution.',
				'Members of sensitive groups may experience health effects. The general public is not likely to be affected.',
				'Everyone may begin to experience health effects; members of sensitive groups may experience more serious health effects',
				'Health warnings of emergency conditions. The entire population is more likely to be affected',
				'Health alert: everyone may experience more serious health effects',
				'Health alert: everyone may experience more serious health effects'
			);
			if ($val > 0) {
				if ($val <= 11.9) {
					$point = 1;
				} else if (($val <= 35.4) && ($val > 11.9)) {
					$point = 2;
				} else if (($val <= 55.4) && ($val > 35.4)) {
					$point = 3;
				} else if (($val <= 150.4) && ($val > 55.4)) {
					$point = 4;
				} else if (($val <= 250.4) && ($val > 150.4)) {
					$point = 5;
				} else if (($val <= 350.4) && ($val > 250.4)) {
					$point = 6;
				} else if (($val > 350.4)) {
					$point = 6;
				}
				$data['color'] = $ar_color[$point];
				$data['icon'] = $ar_icon[$point];
				$data['title'] = $ar_title[$point];
				$data['title_en'] = $ar_title_en[$point];
				$data['caption'] = $ar_caption[$point];
				$data['caption_en'] = $ar_caption_en[$point];

				return $data;
			}
		} else if ($type == "th_aqi") {
			$point = 0;
			$data = array();
			$ar_color = array(1 => '0,191,243', '0,166,81', '253,192,78', '242,101,34', '205,0,0');
			$ar_icon = array(1 => 'th-dust-boy-01', 'th-dust-boy-02', 'th-dust-boy-03', 'th-dust-boy-04', 'th-dust-boy-05');
			$ar_title = array(
				1 =>
				'คุณภาพอากาศดีมาก',
				'คุณภาพอากาศดี',
				'คุณภาพอากาศปานกลาง',
				'คุณภาพอากาศมีผลกระทบต่อสุขภาพ',
				'คุณภาพอากาศมีผลกระทบต่อสุขภาพมาก'
			);
			$ar_caption = array(
				1 =>
				'คุณภาพอากาศดีมาก เหมาะสำหรับกิจกรรมกลางแจ้งและการท่องเที่ยว',
				'คุณภาพอากาศดี สามารถทำกิจกรรมกลางแจ้งและท่องเที่ยวได้ตามปกติ',
				'[ประชาชนทั่วไป] สามารถทำกิจกรรมกลางแจ้งได้ตามปกติ [ผู้ที่ต้องดูแลสุขภาพเป็นพิเศษ] หากมีอาการเบื้องต้น เช่น ไอ หายใจลำบาก ระคายเคือง ตา ควรลดระยะเวลาการทำกิจกรรมกลางแจ้ง',
				'[ประชาชนทั่วไป] ควรเฝ้าระวังสุขภาพ ถ้ามีอาการเบื้องต้น เช่น ไอ หายใจลาบาก ระคาย เคืองตา ควรลดระยะเวลาการทำกิจกรรมกลางแจ้ง หรือใช้อุปกรณ์ป้องกันตนเองหากมีความจำเป็น [ผู้ที่ต้องดูแลสุขภาพเป็นพิเศษ] ควรลดระยะเวลาการทากิจกรรมกลางแจ้ง หรือใช้อุปกรณ์ ป้องกันตนเองหากมีความจำเป็น ถ้ามีอาการทางสุขภาพ เช่น ไอ หายใจลำบาก ตา อักเสบ แน่นหน้าอก ปวดศีรษะ หัวใจเต้นไม่เป็นปกติ คลื่นไส้ อ่อนเพลีย ควรพบแพทย์',
				'ประชาชนทุกคนควรหลีกเลี่ยงกิจกรรมกลางแจ้ง หลีกเลี่ยงพื้นที่ที่มีมลพิษทางอากาศสูง หรือใช้อุปกรณ์ป้องกันตนเองหากมีความจำเป็น หากมีอาการทางสุขภาพควรพบแพทย์'
			);
			$ar_title_en = array(
				1 =>
				'Very Good',
				'Good',
				'Moderate',
				'Unhealthy',
				'Very Unhealthy'
			);
			$ar_caption_en = array(
				1 =>
				'',
				'Air quality is considered satisfactory, and air pollution poses little or no risk',
				'Air quality is acceptable; however, for some pollutants there may be a moderate health concern for a very small number of people who are unusually sensitive to air pollution',
				'Everyone may begin to experience health effects; members of sensitive groups may experience more serious health effects',
				'Health warnings of emergency conditions. The entire population is more likely to be affected'
			);
			if (round($val) <= 15) {
				$point = 1;
			} else if (round($val) > 15 && round($val) <= 25) {
				$point = 2;
			} else if (round($val) > 25 && round($val) <= 37.5) {
				$point = 3;
			} else if (round($val) > 37.5 && round($val) <= 75) {
				$point = 4;
			} else if (round($val) > 75) {
				$point = 5;
			}
			$data['th_color'] = $ar_color[$point];
			$data['th_dustboy_icon'] = $ar_icon[$point];
			$data['th_title'] = $ar_title[$point];
			$data['th_caption'] = $ar_caption[$point];

			return $data;
		}
	}

	function getIndexInfo($val, $type){
		$point=0;
		$data=array();
		$ar_color = array(1=>'0,191,243', '0,166,81', '253,192,78', '242,101,34', '205,0,0');
		$ar_icon = array(1=>'th-dust-boy-01', 'th-dust-boy-02', 'th-dust-boy-03', 'th-dust-boy-04', 'th-dust-boy-05');

		if (round($val) <= 15) {
			$point = 1;
		} else if (round($val) > 15 && round($val) <= 25) {
			$point = 2;
		} else if (round($val) > 25 && round($val) <= 37.5) {
			$point = 3;
		} else if (round($val) > 37.5 && round($val) <= 75) {
			$point = 4;
		} else if (round($val) > 75) {
			$point = 5;
		}
		if($type=="color"){
			$data['color'] = $ar_color[$point];
		}else{
			$data['icon'] = $ar_icon[$point];
		}			
		return $data;
		
	}

	public function getStation(){
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		if (!$stations_data = $this->cache->get('stations')) {
			$data = array();
			$rsStation = json_decode(file_get_contents('https://www-old.cmuccdc.org/assets/api/haze/pwa/json/stations_temp.json'));
			foreach($rsStation as $item){
				$ar_push = array(
					'id'	=> $item->id,
					'code'	=> $item->dustboy_id,
					'url'	=> $item->dustboy_uri,
					'name_th'	=> $item->dustboy_name,
					'name_en'	=> $item->dustboy_name_en,
					'latitude'	=> $item->dustboy_lat,
					'longitude'	=> $item->dustboy_lon,
					'pm10'			=> $item->pm10,
					'pm25'			=> $item->pm25,
					'ws'			=> $item->wind_speed,
					'wd'			=> $item->wind_direction,
					'atm'			=> $item->atmospheric,
					'temp'			=> $item->temp,
					'humid'			=> $item->humid,
					'updatetime'	=> $item->log_datetime
				);
				array_push($data, $ar_push);	
				
			}
			$this->cache->save('stations', $data, 360);
            $stations_data = $data;
		}
		return $stations_data;
	}

    public function forecast_daily_get()
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

    public function stations_daily_forecast_get(){
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));

		$stations_data = $this->getStation();
		$rsDay = json_decode(file_get_contents('https://rcces.soc.cmu.ac.th:1443/pm25/v1/getDaily'));
		
		$data = array();
		foreach($stations_data as $item){

			$ar_forcast = array();
			foreach($rsDay->air_quality as $forecast_item){

				
				if((float)$forecast_item->Latitude==(float)$item['latitude'] && (float)$forecast_item->Longitude==(float)$item['longitude']){
					
					$forecast_item->color = $this->getIndexInfo($forecast_item->PM25, 'color')['color'];
					$forecast_item->icon = $this->getIndexInfo($forecast_item->PM25, 'icon')['icon'];
					$forecast_item->PM25 = ceil($forecast_item->PM25);

					$ar_item = array(
						'color' => $this->getIndexInfo($forecast_item->PM25, 'color')['color'],
						'pm25'	=> ceil($forecast_item->PM25),
						'icon'	=> $this->getIndexInfo($forecast_item->PM25, 'icon')['icon'],
						'forecastDate'	=> $forecast_item->ForecastDate
					);				
					if($ar_forcast!=null){
						$ck_exits = 0;
						foreach($ar_forcast as $ck_loop){
							if($ck_loop['forecastDate']==$ar_item['forecastDate']){
								$ck_exits=1;
							}
						}
						if($ck_exits==0){
							array_push($ar_forcast,$ar_item);
						}
					}else{
						array_push($ar_forcast, $ar_item);
					}
				}
				
			}


			$item['forecast'] = $ar_forcast;
			array_push($data, $item);
		}

		$this->response($data, 200);

    }

}