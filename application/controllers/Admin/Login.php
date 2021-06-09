<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array("Admin/Login_Model"));
	}

	public function index()
	{
		$arrParam = array(
			"ROLE" => "ADMIN",
			"TITLE" => "LOGIN ADMIN",
			"ACTION" => base_url("Admin/Login/doLogin")
		);
		$this->load->view('Login_View',$arrParam);
	}

	public function doLogin(){
		$username = $this->input->post("txtUsername");
		$password = $this->input->post("txtPassword");
		$arrValidation = array(
			array('field' => 'txtUsername', 'label' => 'Username', 'rules' => 'required'),
			array('field' => 'txtPassword', 'label' => 'Password','rules' => 'required'),
		);
		$this->form_validation->set_rules($arrValidation);
		if($this->form_validation->run()){
			$arrData = array(
				"username" => $username,
				"password" => $password
			);
			$arrResult = $this->Login_Model->selectDataLogin($arrData);
			if(!empty($arrResult)){
				$arrSession = array(
					"admin_id" => $this->encryption->encrypt($arrResult[0]["admin_id"]),
					"admin_username" => $this->encryption->encrypt($arrResult[0]["username"]),
					"admin_password" => $this->encryption->encrypt($arrResult[0]["password"]),
				);
				$this->session->set_userdata($arrSession);
				redirect(base_url("Admin/Dashboard"),"refresh");
			}else{
				$this->session->set_flashdata("error_login", "Username dan Password Tidak Cocok");
				redirect(base_url("Admin/Login"),"refresh");
			}
		}
	}
}
