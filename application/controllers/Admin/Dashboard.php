<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array("Admin/Dashboard_Model","Member/Register_Model"));
		if(empty($this->session->userdata("admin_id"))){
			redirect("Admin/Login","refresh");
		}
	}

	public function index()
	{
		$arrData = array(
			"SUMMARY_DATA" => $this->Dashboard_Model->selectCounterDataPeserta()
		);
		$this->load->view('Admin/Dashboard_Summary', $arrData);
	}

	public function candidate()
	{
		$arrData = array(
			"HOLD_DATA" => $this->Dashboard_Model->selectAllDataPeserta("hold")
		);
		$this->load->view('Admin/Dashboard_View', $arrData);
	}

	public function acc()
	{
		$arrData = array(
			"ACCEPTED_DATA" => $this->Dashboard_Model->selectAllDataPeserta("recepted")
		);
		$this->load->view('Admin/Dashboard_Acc', $arrData);
	}
	public function rejected()
	{
		$arrData = array(
			"REJECTED_DATA" => $this->Dashboard_Model->selectAllDataPeserta("rejected")
		);
		$this->load->view('Admin/Dashboard_Rejected', $arrData);
	}

	public function akun()
	{
		$arrData = array(
			"USERS_DATA" => $this->Dashboard_Model->selectAllDataUser()
		);
		$this->load->view('Admin/Dashboard_User', $arrData);
	}

	public function doLogout(){
		if(!empty($this->session->userdata("admin_id"))){
			$this->session->sess_destroy();
			redirect(base_url("Admin/Login"),"refresh");
		}
	}

	public function getDataCounter(){
		$arrResponse = $this->Dashboard_Model->selectCounterDataPeserta();
		$this->output->set_status_header($arrResponse["code"]);
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($arrResponse));
		$this->output->_display();
		exit;
	}

	public function doUpdateStatus(){
		$id = $this->input->post("code");
		$status = $this->input->post("status");
		if($status == "recepted"){
			$arrData = $this->Dashboard_Model->selectDetailDataPesertaByID($id);
			$arrParam = array(
				"nama_lengkap" => $arrData[0]["nama_lengkap"],
				"tower_id" => $arrData[0]["tower_id"],
				"lantai_id" => $arrData[0]["lantai_id"],
				"unit_id" => $arrData[0]["unit_id"],
			);
			$arrParam2 = $this->_accessGenerator($arrParam);
			$this->Dashboard_Model->insertUser(array_merge($arrParam2, array("peserta_id"=>$arrData[0]["peserta_id"])));
			$arrDataViewEmail = array(
				"nama_lengkap" => $arrData[0]["nama_lengkap"],
				"username" => $arrParam2["username"],
				"password" => $this->encryption->decrypt($arrParam2["password"])
			);
			$emailBody = $this->load->view("Admin/Include/Mail/Accepted_Mail", $arrDataViewEmail, TRUE);
			$arrDataEmail = array(
				"email" => $arrData[0]["email"],
				"subject" => "Email Konfirmasi Pendaftaran RUAT Apartemen Gateway",
				"body" => $emailBody
			);
			$this->_sendEmail($arrDataEmail);
		}
		$arrData = array(
			"peserta_id" => $id,
			"status" => $status
		);
		$arrResponse = $this->Dashboard_Model->updateStatus($arrData);
		$this->output->set_status_header($arrResponse["code"]);
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($arrResponse));
		$this->output->_display();
		exit;
	}

	public function testEmail(){
		$this->load->view("Admin/Include/Mail/Accepted_Mail");
	}

	private function _accessGenerator($param){
		$arrUserName = explode(" ", $param["nama_lengkap"]);
		$TOWER = $this->Register_Model->selectDataTower($param["tower_id"]);
		$LANTAI = $this->Register_Model->selectDataLantai($param["lantai_id"]);
		$UNIT = $this->Register_Model->selectDataUnit($param["unit_id"]);

		if(strlen($TOWER[0]["nama_tower"]) >= 2){
			$tower = $TOWER[0]["nama_tower"];
		}else{
			$tower = "0".$TOWER[0]["nama_tower"];
		}
		$username = $tower.$LANTAI[0]["no_lantai"].$UNIT[0]["nama_unit"]."-".$arrUserName[0];
		$generatePassword = substr(md5(uniqid(rand(), true)), 0, 6);

		return array(
			"username" => $username,
			"password" => $this->encryption->encrypt($generatePassword)
		);
	}

	private function _sendEmail($param){
		$config["useragent"] = "Gateway Apartment";
		$config["protocol"] = "smtp";
		$config["smtp_host"] = "ssl://mail.radiation-tech.com";
		$config["smtp_user"] = "admin@radiation-tech.com";
		$config["smtp_pass"] = "ninjasaga19";
		$config["smtp_port"] = "465";
		$config["mailtype"] = "html";
		$config["priority"] = 1;
		$this->email->initialize($config);
		$this->email->from("admin@radiation-tech.com");
		$this->email->to($param["email"]);
		$this->email->subject($param["subject"]);
		$this->email->message($param["body"]);
		$this->email->send(TRUE);
	}
}
