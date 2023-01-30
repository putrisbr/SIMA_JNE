<?php
class m_data_user extends CI_Model {



	public function __construct() {
		$this->load->database();
		$this->load->library('encryption');
	}

	public function get()
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$data = $this->db->get();
		return $data->result_array();
	}	

	
}
?>