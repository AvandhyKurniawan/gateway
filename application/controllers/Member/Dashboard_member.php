<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata("id"))){
			redirect("Member/Login","refresh");
		}
	}
	public function index()
	{
		$this->load->view('Member/Dashboard_member');
	}

	public function doLogout(){
		if(!empty($this->session->userdata("id"))){
			$this->session->sess_destroy();
			redirect(base_url("Member/Login"),"refresh");
		}
	}
}
