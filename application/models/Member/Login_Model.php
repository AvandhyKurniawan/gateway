<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model{
	#=============== INSERT FUNCTION (START) ===============#
	#=============== INSERT FUNCTION (FINISH) ===============#

	#=============== SELECT FUNCTION (START) ===============#
	public function selectDataLogin($param){
		$this->db->select("*");
		$this->db->where("username", $param["username"]);
		$this->db->where("password", $param["password"]);
		$query = $this->db->get("users");
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return array();
		}
	}
	#=============== SELECT FUNCTION (FINISH) ===============#

	#=============== UPDATE FUNCTION (START) ===============#
	#=============== UPDATE FUNCTION (FINISH) ===============#

	#=============== DELETE FUNCTION (START) ===============#
	#=============== DELETE FUNCTION (FINISH) ===============#
}
