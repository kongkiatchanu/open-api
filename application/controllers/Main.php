<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	private $reCAPTCHA  = '6LfegkgUAAAAADdlRA0kxIwZvqSz3l-vqR5rAZwY';
	public function __construct() {
		parent::__construct();

		$this->load->model('main_model');
        $this->load->library('form_validation');

	}
	public function index()
	{
		$this->data['view'] = 'document_account';
		$this->load->view('template_main',$this->data);
	}

	function genKey($length = 40){
		
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$string = '';
		for ($i = 0; $i < $length; $i++) {
			$string .= $characters[rand(0, $charactersLength - 1)];
		}
		return $string;
	}

	public function sendMsg($to, $message){
		
		$from = 'noreply.3e@gmail.com';
        $subject = 'Verify Email | CMUCCDC APIs';
        
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo true;
        } else {
            echo false;
        }
		exit;
	}

	public function checkEmail(){
		if(trim($this->input->get('access_email'))){
			$rs = $this->main_model->ckRegisterEmail($this->input->get('access_email'));
			if($rs){
				echo "false";
			}else{
				echo "true";
			}
		}
	}

	public function test_verify(){
		$message = 'ads';
		$ar = array(
			'message'   => $message
		);
		$this->load->view('noti', $ar);
	}

	public function register(){
		if($this->input->post()!=null){
			$ar = $this->input->post();
			
			if($this->input->post('g-recaptcha-response')!=null){
				$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$this->reCAPTCHA."&response=".$this->input->post('g-recaptcha-response')."&remoteip=".$_SERVER['REMOTE_ADDR'] ;
				$response=json_decode(file_get_contents($url), true);
				if($response['success'] == false){
					$this->session->set_userdata('noti_action', array('dialog_view' => 'dialog_spam'));
					echo '<script>alert("เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง");window.location="'.base_url('/#account').'";</script>';
					exit();
				}else{
					
					//$ar['member_service'] = json_encode($ar['member_service']);

					
					$securekey 					= $this->genKey(100);
					$ar_post['user_key']	    = $this->genKey(40);
					$ar_post['user_email'] 		= $ar['access_email'];
					$ar_post['user_name'] 		= $ar['access_name'];
					$ar_post['user_org']		= $ar['access_org'];
					$ar_post['user_password'] 	= md5(sha1($ar['access_password']));
					$ar_post['user_purpose'] 	= $ar['access_purpose'];
					$ar_post['createdate'] 		= date('Y-m-d H:i:s');
					$ar_post['securekey'] 		= $securekey;
					
					unset($ar['g-recaptcha-response']);

					$message = '<p>สวัสดีคุณ '.$ar_post['user_name'].'</p>';
					$message .='<p>เมื่อสักครู่มีการใช้อีเมล์สมัครใช้งาน APIs <strong>ศูนย์ข้อมูลการเปลี่ยนแปลงสภาพภูมิอากาศ cmuccdc.org</strong><br/>';
					$message .='ภายใต้หน่วยงาน/สังกัด:: <strong>'.$ar_post['user_org'].'</strong></p>';
					

					//$this->sendMsg($to, $message);
					
					$rs=$this->main_model->insertNewMember($ar_post);
					if($rs){
						$this->session->set_userdata('noti_action', array('dialog_view' => 'dialog_success'));
						echo '<script>alert("ลงทะเบียนเรียบร้อยกรุณายืนยันอีเมล์ เพื่อเปิดใช้งาน");window.location="'.base_url('/#account').'";</script>';
						exit();
					}else{
						$this->session->set_userdata('noti_action', array('dialog_view' => 'dialog_spam'));
						echo '<script>alert("เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง");window.location="'.base_url('/#account').'";</script>';
						exit();
					}

				}
			}else{
				$this->session->set_userdata('noti_action', array('dialog_view' => 'dialog_spam'));
				echo '<script>alert("เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง");window.location="'.base_url('/#account').'";</script>';
				exit();
			}
		}else{
			redirect(base_url(''));
		}
	}
}
