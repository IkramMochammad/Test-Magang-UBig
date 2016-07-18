<?php
	class Chart_model extends CI_Model{
		public function getJmlJenis($value)
		{
			$this->db->select("*");
			$this->db->where(array("j_kelamin"=>$value));
			$sql = $this->db->get("data_mhs");
			return $sql->num_rows();
		}

		public function getMhsCuti($value)
		{
			$this->db->select("*");
			$this->db->where(array("status"=>$value));
			$sql = $this->db->get("data_mhs");
			return $sql->num_rows();
		}

		public function getJmlMhs()
		{
			$sql = $this->db->get("data_mhs");
			return $sql->num_rows();
		}
		public function getJmlTh($value)
		{
			$this->db->where(array("thn_masuk"=>$value));
			$sql = $this->db->get("data_mhs");
			return $sql->num_rows();
		}

		// public function getPresentase($value)
		// {
		// 	$sql = getJmlJenis($value)/getJmlMhs()*100;
		// 	return $sql;
		// }
	}
?>