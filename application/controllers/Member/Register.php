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
			"TOWER" => $this->Register_Model->selectDataTower()
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

		if($Status == "Pemilik"|| $Status == "Penghuni"){
			$Ktp 			= $_FILES["fileKtpPemilik"]["name"];
			$FotoDiri 		= $_FILES["fileFotoDiriPemilik"]["name"];
			$SuratKuasa		= "";
		}else if($Status == "Pemegang Kuasa"){
			$Ktp 				= $_FILES["fileKtpWakil"]["name"];
			$FotoDiri 			= $_FILES["fileFotoDiriWakil"]["name"];
			$SuratKuasa 		= $_FILES["fileSuratKuasa"]["name"];
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
		if($Status == "Pemilik" || $Status == "Penghuni"){
			$arrValidation2 = array(
				array('field' => 'KtpPemilik', 'label' => 'Ktp Pemilik', 'rules' => 'required'),
				array('field' => 'FotoDiriPemilik', 'label' => 'Foto Diri Pemilik', 'rules' => 'required')
			);
		}else if($Status == "Pemegang Kuasa"){
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
				"alamat_ktp" => $Alamat,
				"status_peserta" => $Status,
				"unit_id" => $Nomor
			);
			$timestamp = microtime();
			$arrData["foto_ktp"] = md5($arrData["nama_lengkap"].$timestamp)."/".str_replace(" ","_",$Ktp);
			$arrData["foto_diri"] = md5($arrData["nama_lengkap"].$timestamp)."/".str_replace(" ","_",$FotoDiri);
			if(!empty($SuratKuasa)){
				$arrData["foto_kuasa"] = md5($arrData["nama_lengkap"].$timestamp)."/".str_replace(" ","_",$SuratKuasa);
			}

			$arrResponse = $this->Register_Model->insertRegisterMember($arrData);

			if($Status == "Pemilik"|| $Status == "Penghuni"){
				$this->_uploadFile(array("field" => "fileKtpPemilik", "dir" => md5($arrData["nama_lengkap"].$timestamp)));
				$this->_uploadFile(array("field" => "fileFotoDiriPemilik", "dir" => md5($arrData["nama_lengkap"].$timestamp)));
			}else if($Status == "Pemegang Kuasa"){
				$this->_uploadFile(array("field" => "fileKtpWakil", "dir" => md5($arrData["nama_lengkap"].$timestamp)));
				$this->_uploadFile(array("field" => "fileFotoDiriWakil", "dir" => md5($arrData["nama_lengkap"].$timestamp)));
				$this->_uploadFile(array("field" => "fileSuratKuasa", "dir" => md5($arrData["nama_lengkap"].$timestamp)));
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
								 "message" 	=> "Semua Kolom Tidak Boleh Kosong",
								 "data"		=> $this->form_validation->error_array());

			$this->output->set_status_header(403);
			$this->output->set_content_type('application/json', 'utf-8');
			$this->output->set_output(json_encode($this->form_validation->error_array()));
			$this->output->_display();
			exit;
		}
	}

	public function getLantai(){
		$tower_id = $this->input->get("TOWER");
		$arrResponse = $this->Register_Model->selectDataLantaiByTowerId($tower_id);
		$this->output->set_status_header(200);
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($arrResponse));
		$this->output->_display();
		exit;
	}

	public function getUnit(){
		$lantai_id = $this->input->get("LANTAI");
		$arrResponse = $this->Register_Model->selectDataUnitByLantaiId($lantai_id);
		$this->output->set_status_header(200);
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($arrResponse));
		$this->output->_display();
		exit;
	}

	private function _uploadFile($param){
		$structure = './support/assets/upload/users/'.$param["dir"]."/";

		if(!is_dir($structure)){
			if (!mkdir($structure, 0777, true)) {
				die('Failed to create folders...');
			}
		}
		$config['upload_path']          = $structure;
		$config['allowed_types']        = 'gif|jpg|png|pdf';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($param["field"])){
			return false;
		}else{
			return true;
		}
	}
}
