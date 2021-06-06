<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array("Member/Register_Model"));
	}
	
	public function index()
	{
		$arrData = array(
			"TOWER" => $this->Register_Model->selectDataTower(),
			"LANTAI" => $this->Register_Model->selectDataLantai(),
			"UNIT" => $this->Register_Model->selectDataUnit(),
		);
		$this->load->view('Member/Register_View', $arrData);
	}

	public function saveData(){
		$NamaLengkap 			= $this->input->post("NamaLengkap");
		$Tower 					= $this->input->post("Tower");
		$Lantai 				= $this->input->post("Lantai");
		$Nomor 					= $this->input->post("Nomor");
		$Status 				= $this->input->post("Status");
		$Domisili 				= $this->input->post("Domisili");
		$Alamat 				= $this->input->post("Alamat");
		$NoHp 					= $this->input->post("NoHp");
		$Email 					= $this->input->post("Email");

		if($Status == "Pemilik"){
			$Ktp 			= $_FILES["fileKtpPemilik"]["name"];
			$FotoDiri 		= $_FILES["fileFotoDiriPemilik"]["name"];
			$SuratKuasa		= "";
		}else if($Status == "Penyewa"){
			$Ktp 				= $_FILES["KtpWakil"]["name"];
			$FotoDiri 			= $_FILES["FotoDiriWakil"]["name"];
			$SuratKuasa 		= $_FILES["SuratKuasa"]["name"];
		}else{
			$Ktp 				= "";
			$FotoDiri 			= "";
			$SuratKuasa 		= "";
		}
		
		
		$fileKtpPemilik 		= $this->input->post("fileKtpPemilik");
		$fileFotoDiriPemilik 	= $this->input->post("fileFotoDiriPemilik");

		$fileKtpWakil 			= $this->input->post("fileKtpWakil");
		$fileFotoDiriWakil 		= $this->input->post("fileFotoDiriWakil");
		$fileSuratKuasa 		= $this->input->post("fileSuratKuasa");

		$arrValidation = array(
			array('field' => 'NamaLengkap', 'label' => 'Nama Lengkap', 'rules' => 'required'),
			array('field' => 'Tower', 'label' => 'Tower','rules' => 'required'),
			array('field' => 'Lantai', 'label' => 'Lantai', 'rules' => 'required'),
			array('field' => 'Nomor', 'label' => 'Nomor', 'rules' => 'required'),
			array('field' => 'Status', 'label' => 'Status', 'rules' => 'required'),
			array('field' => 'Domisili', 'label' => 'Domisili', 'rules' => 'required'),
			array('field' => 'Alamat', 'label' => 'Alamat', 'rules' => 'required'),
			array('field' => 'NoHp', 'label' => 'No Hp', 'rules' => 'required'),
			array('field' => 'Email', 'label' => 'Email', 'rules' => 'required|valid_email')
		);
		if($Status == "Pemilik"){
			$arrValidation2 = array(
				array('field' => 'KtpPemilik', 'label' => 'Ktp Pemilik', 'rules' => 'required'),
				array('field' => 'FotoDiriPemilik', 'label' => 'Foto Diri Pemilik', 'rules' => 'required')
			);
		}else if($Status == "Penyewa"){
			$arrValidation2 = array(
				array('field' => 'KtpWakil', 'label' => 'Ktp Pemilik', 'rules' => 'required'),
				array('field' => 'FotoDiriWakil', 'label' => 'Ktp Pemilik', 'rules' => 'required'),
				array('field' => 'SuratKuasa', 'label' => 'Foto Diri Pemilik', 'rules' => 'required')
			);
		}else{
			$arrValidation2 =  array();
		}

		$this->form_validation->set_rules(array_merge($arrValidation,$arrValidation2));
		if($this->form_validation->run()){
			$arrData = array(
				"nama_lengkap" => $NamaLengkap,
				"email" => $Email,
				"tlp" => $NoHp,
				"foto_ktp" => $Ktp,
				"foto_diri" => $FotoDiri,
				"foto_kuasa" => $SuratKuasa,
				"domisili" => $Domisili,
				"status_peserta" => $Status,
				"tower_id" => $Tower,
				"lantai_id" => $Lantai,
				"unit_id" => $Nomor
			);

			$arrData2 = $this->_accessGenerator($arrData);
			$arrData["foto_ktp"] = $arrData2["username"]."/".str_replace(" ","_",$Ktp);
			$arrData["foto_diri"] = $arrData2["username"]."/".str_replace(" ","_",$FotoDiri);
			if(!empty($SuratKuasa)){
				$arrData["foto_kuasa"] = $arrData2["username"]."/".str_replace(" ","_",$SuratKuasa);
			}

			$arrResponse = $this->Register_Model->insertRegisterMember($arrData, $arrData2);

			if($Status == "Pemilik"){
				$this->_uploadFile(array("field" => "fileKtpPemilik", "username" => $arrData2["username"]));
				$this->_uploadFile(array("field" => "fileFotoDiriPemilik", "username" => $arrData2["username"]));
			}else if($Status == "Penyewa"){
				$this->_uploadFile(array("field" => "fileKtpWakil", "username" => $arrData2["username"]));
				$this->_uploadFile(array("field" => "fileFotoDiriWakil", "username" => $arrData2["username"]));
				$this->_uploadFile(array("field" => "fileSuratKuasa", "username" => $arrData2["username"]));
			}else{
			}

			$this->output->set_status_header($arrResponse["code"]);
			$this->output->set_content_type('application/json', 'utf-8');
			$this->output->set_output(json_encode($arrResponse));
			$this->output->_display();
			exit;
		}else{
			$arrResponse = array("code" 	=> 403,
								 "status" 	=> "Forbidden",
								 "message" 	=> "Gagal",
								 "data"		=> $this->form_validation->error_array());

			$this->output->set_status_header(403);
			$this->output->set_content_type('application/json', 'utf-8');
			$this->output->set_output(json_encode($this->form_validation->error_array()));
			$this->output->_display();
			exit;
		}
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
			"password" => $generatePassword
		);
	}

	private function _uploadFile($param){
		$structure = './support/assets/upload/users/'.$param["username"]."/";

		if(!is_dir($structure)){
			if (!mkdir($structure, 0777, true)) {
				die('Failed to create folders...');
			}
		}
		$config['upload_path']          = $structure;
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($param["field"])){
			return false;
		}else{
			return true;
		}
	}
}
