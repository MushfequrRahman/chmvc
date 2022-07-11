<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

	public function user_list()
	{
		$query="SELECT * FROM user";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function user_name()
	{
		$query="SELECT * FROM user";
		$result=$this->db->query($query);
		return $result->result_array();
	}
}
