<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model{
	#=============== INSERT FUNCTION (START) ===============#
	#=============== INSERT FUNCTION (FINISH) ===============#

	#=============== SELECT FUNCTION (START) ===============#
	public function selectDataLogin($param){
		$this->db->select("*");
		$this->db->where("username", $param["username"]);
		$query = $this->db->get("admin");
		if($query->num_rows() > 0){
			$arrResult = $query->result_array();
			if($this->encryption->decrypt($arrResult[0]["password"]) == $param["password"]){
				return $arrResult;
			}else{
				return array();
			}
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
