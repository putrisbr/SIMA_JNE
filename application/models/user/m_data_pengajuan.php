<?php
class m_data_pengajuan extends CI_Model {



	public function __construct() {
		$this->load->database();
		$this->load->library('encryption');
	}

	public function get()
	{
		$query = $this->db->query("SELECT tbl_pengajuan.*,tbl_kategori_aset.* FROM tbl_pengajuan INNER JOIN tbl_kategori_aset ON tbl_pengajuan.id_kategori = tbl_kategori_aset.id_kategori ");
		return $query->result_array();
	}	

	public function hapus($id_pengajuan)
	{
		$this->db->where('id_pengajuan',$id_pengajuan);
		return $this->db->delete('tbl_pengajuan');
	}

	public function getKategori()
	{

		$this->db->select("kategori");
		$this->db->from("tbl_kategori_aset");
		$this->db->distinct();
		$data = $this->db->get();
		return $data->result_array();
	}

	public function tambah($data)
	{
		return $this->db->insert('tbl_pengajuan',$data);
	}

	public function getDataJenis($kategori)
	{
		$this->db->select("*");
		$this->db->from("tbl_kategori_aset");
		$this->db->where("kategori",$kategori);
		$data = $this->db->get();

		return $data->result_array();
	}

	
}
?>