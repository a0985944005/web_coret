<?php
class emailsend extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
		$this->load->helper('url');
		date_default_timezone_set("Asia/Taipei");
	}
	
	public function sendmail($toemail,$message){
		$this->load->library('email');
		$this->email->from('lukatw@gmail.com', '赫本');
		$this->email->to($toemail);
		$this->email->subject('Email Test');
		$this->email->message($messages); 
		
		$this->email->send();
		
		echo $this->email->print_debugger();
		
	}
}
?>