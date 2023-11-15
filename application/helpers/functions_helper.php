<?php 
function ConvertToThaiDate($date, $short)
{

	if ($date == "0000-00-00 00:00:00") {
		return 'ไม่ระบุ';
	} else {
		if ($date) {

			if ($short) {
				$MONTH = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
			} else {
				$MONTH = array(1 => "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
			}
			$strYear = date("Y", strtotime($date)) + 543;
			$strMonth = date("n", strtotime($date));
			$strDay = date("j", strtotime($date));
			$strHour = date("H", strtotime($date));
			$strMinute = date("i", strtotime($date));
			$strSeconds = date("s", strtotime($date));

			$strMonthThai = $MONTH[$strMonth];
			return "$strDay $strMonthThai พ.ศ. $strYear";
			
		} else {
			return "<font color=\"#FF0000\">ไม่ระบุ</font>";
		}
	}
}


function getBankList($id=null){
	$ar_list = array(1=>
		'ธนาคารกรุงเทพ',
		'ธนาคารกสิกรไทย',
		'ธนาคารกรุงไทย',
		'ธนาคารทหารไทย',
		'ธนาคารไทยพาณิชย์',
		'ธนาคารกรุงศรีอยุธยา',
		'ธนาคารเกียรตินาคิน',
		'ธนาคารซีไอเอ็มบีไทย',
		'ธนาคารทิสโก้',
		'ธนาคารธนชาต',
		'ธนาคารยูโอบี',
		'ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)',
		'ธนาคารไทยเครดิตเพื่อรายย่อย',
		'ธนาคารแลนด์ แอนด์ เฮาส์',
		'ธนาคารไอซีบีซี (ไทย)',
		'ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย',
		'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร',
		'ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย',
		'ธนาคารออมสิน',
		'ธนาคารอาคารสงเคราะห์',
		'ธนาคารอิสลามแห่งประเทศไทย',
		'ธนาคารแห่งประเทศจีน',
		'ธนาคารซูมิโตโม มิตซุย ทรัสต์ (ไทย)',
		'ธนาคารฮ่องกงและเซี้ยงไฮ้แบงกิ้งคอร์ปอเรชั่น จำกัด'
	);
	if($id!=null){
		return $ar_list[$id];
	}else{
		return $ar_list;
	}
	
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 20; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function decodeBD($date){
	$data = explode("/",$date);
	return $data[2].'-'.$data[1].'-'.$data[0];
}

function encodeData($date){
	$temp = explode(" ",$date);
	$data = explode("-",$temp[0]);
	return $data[2].'/'.$data[1].'/'.$data[0];
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function getStatusOrder($text, $status) {
	if($status==1){
		$html = '<div class="badge rounded-pill text-secondary bg-light-secondarys p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i> เกินกำหนดชำระเงิน</div>';
	}else{
		if($text=="waitting"){
			$html = '<div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i> รอชำระเงิน</div>';
		}else if($text== 'waitting_verify'){
			$html = '<div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i> ชำระเงินแล้ว กรุณาตรวจสอบ</div>';
		}else if($text== 'approve'){
			$html = '<div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i> อนุมัติเรียบร้อย</div>';
		}
	}
	
	return $html;
}

function getAgeByDate($date) {
	$birthDate = explode("-", $date);
	$final = ($birthDate[0]-543).'-'.$birthDate[1].'-'.$birthDate[2];

	return (date('Y') - date('Y',strtotime($final)));
}
