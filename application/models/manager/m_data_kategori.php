<?php
class m_data_kategori extends CI_Model {



	public function __construct() {
		$this->load->database();
		$this->load->library('encryption');
	}

	public function get()
	{
		$this->db->select('*');
		$this->db->from('tbl_kategori_aset');
		$data = $this->db->get();
		return $data->result_array();
	}	

	
}
?>