<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_Model extends CI_Model{
	#=============== INSERT FUNCTION (START) ===============#
	public function insertRegisterMember($param, $param2){
		$this->db->trans_start();
		$this->db->insert("peserta", $param);
		$this->db->insert("users", $param2);
		$this->db->trans_complete();
		if($this->db->trans_status() !== FALSE){
			return array("code" 	=> 201,
						 "status" 	=> "Created",
						 "message" 	=> "Berhasil",
						 "data"		=> array());
		}else{
			return array("code" 	=> 404,
						 "status" 	=> "Not Found",
						 "message" 	=> "Gagal",
						 "data"		=> array());
		}
	}
	#=============== INSERT FUNCTION (FINISH) ===============#

	#=============== SELECT FUNCTION (START) ===============#
	public function selectDataTower($param=""){
		if(!empty($param)){
			$this->db->where("tower_id", $param);
		}
		return $this->db->get("tower")->result_array();
	}

	public function selectDataLantai($param=""){
		if(!empty($param)){
			$this->db->where("lantai_id", $param);
		}
		return $this->db->get("lantai")->result_array();
	}

	public function selectDataUnit($param=""){
		if(!empty($param)){
			$this->db->where("unit_id", $param);
		}
		return $this->db->get("unit")->result_array();
	}
	#=============== SELECT FUNCTION (FINISH) ===============#

	#=============== UPDATE FUNCTION (START) ===============#
	#=============== UPDATE FUNCTION (FINISH) ===============#

	#=============== DELETE FUNCTION (START) ===============#
	#=============== DELETE FUNCTION (FINISH) ===============#
}
