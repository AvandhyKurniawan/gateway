<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard_Model extends CI_Model{
	#=============== INSERT FUNCTION (START) ===============#
	public function insertUser($param){
		$this->db->trans_start();
		$this->db->insert("users", $param);
		$this->db->trans_complete();
		if($this->db->trans_status() !== FALSE){
			return array("code" 	=> 201,
						 "status" 	=> "Success",
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
	public function selectAllDataPeserta($param=""){
		$this->db->select("A.*, B.nama_unit, C.no_lantai, D.nama_tower");
		$this->db->join("unit B","A.unit_id = B.unit_id","INNER");
		$this->db->join("lantai C","B.lantai_id = C.lantai_id","INNER");
		$this->db->join("tower D","C.tower_id = D.tower_id","INNER");
		$this->db->where("A.status", $param);
		$arrData = $this->db->get("peserta A")->result_array();
		return $arrData;
	}

	public function selectAllDataUser(){
		$this->db->select("A.*, B.nama_lengkap");
		$this->db->join("peserta B","A.peserta_id = B.peserta_id","INNER");
		return $this->db->get("users A")->result_array();
	}

	public function selectDetailDataPeserta($param){
		$this->db->select("A.*, B.nama_unit, C.no_lantai, D.nama_tower");
		$this->db->join("unit B","A.unit_id = B.unit_id","INNER");
		$this->db->join("lantai C","B.lantai_id = C.lantai_id","INNER");
		$this->db->join("tower D","C.tower_id = D.tower_id","INNER");
		$this->db->where("A.status", $param);
		$arrData = $this->db->get("peserta A")->result_array();
		if(count($arrData) > 0){
			return array("code" 	=> 200,
						 "status" 	=> "Success",
						 "message" 	=> "Data tesedia",
						 "data"		=> $arrData);
		}else{
			return array("code" 	=> 404,
						 "status" 	=> "Not Found",
						 "message" 	=> "Data tidak tersedia",
						 "data"		=> array());
		}
	}

	public function selectCounterDataPeserta(){
		$this->db->select("COUNT(IF(status = 'hold', 1, NULL)) AS HOLD,
						   COUNT(IF(status = 'recepted', 1, NULL)) AS RECEPTED,
						   COUNT(IF(status = 'rejected', 1, NULL)) AS REJECTED");
		$arrJumlahPeserta = $this->db->get("peserta")->result_array();
		$this->db->select("COUNT(user_id) AS USERS");
		$arrJumlahUsers = $this->db->get("users")->result_array();

		$arrTotal = array_merge($arrJumlahPeserta[0], $arrJumlahUsers[0]);
		return array("code" 	=> 200,
					 "status" 	=> "Success",
					 "message" 	=> "Data tesedia",
					 "data"		=> $arrTotal);
	}

	public function selectDetailDataPesertaByID($param=""){
		$this->db->select("A.*, B.nama_unit, C.no_lantai, C.lantai_id, D.tower_id, D.nama_tower");
		$this->db->join("unit B","A.unit_id = B.unit_id","INNER");
		$this->db->join("lantai C","B.lantai_id = C.lantai_id","INNER");
		$this->db->join("tower D","C.tower_id = D.tower_id","INNER");
		$this->db->where("MD5(A.peserta_id)", $param);
		$arrData = $this->db->get("peserta A")->result_array();
		return $arrData;
	}
	#=============== SELECT FUNCTION (FINISH) ===============#

	#=============== UPDATE FUNCTION (START) ===============#
	public function updateStatus($param){
		$this->db->trans_start();
		$this->db->set("status", $param["status"]);
		$this->db->where("MD5(peserta_id)", $param["peserta_id"]);
		$this->db->update("peserta");
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
	#=============== UPDATE FUNCTION (FINISH) ===============#

	#=============== DELETE FUNCTION (START) ===============#
	#=============== DELETE FUNCTION (FINISH) ===============#
}
