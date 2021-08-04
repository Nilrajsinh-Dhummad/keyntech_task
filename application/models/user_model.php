<?php
class user_model extends CI_Model
{
	public function insert($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function select($table)
	{
		$select=$this->db->get($table);
		return $select->result_array();
	}

	public function select_where($table,$where)
	{
		$select=$this->db->get_where($table,$where);
		return $select->result_array();
	}
}
?>