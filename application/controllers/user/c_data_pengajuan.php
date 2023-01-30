<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_data_pengajuan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/m_data_pengajuan','m_data_pengajuan');
	}

	public function index()
	{
		$data['title'] = "Pengajuan Aset | SIMA JNE";
		$data['menu'] = "pengajuan";
		$data['data_pengajuan'] = $this->m_data_pengajuan->get();
		$data['kategori'] = $this->m_data_pengajuan->getKategori();
		$this->load->view('user/template/header',$data);
		$this->load->view('user/template/sidenav');		
		$this->load->view('user/v_pengajuan');
		$this->load->view('user/template/footer');
		$this->load->view('user/template/__scriptData');

	}

	public function ambil_jenis()
	{
		$kategori = $this->input->post("kategori_aset");

		$data_jenis = $this->m_data_pengajuan->getDataJenis($kategori);

		echo json_encode($data_jenis);
	}

	public function getID($length = 7) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		$randomString = "PA-" . $randomString;
		return $randomString;
	}


	public function hapus()
	{
		$id_pengajuan = $this->input->post('id_pengajuan');
		
		if($this->m_data_pengajuan->hapus($id_pengajuan)){
			echo json_encode(true);
		}else{
			echo json_encode(false);
		}
	}

	public function tambah()
	{
		$this->form_validation->set_error_delimiters('<div class="mt-1 alert alert-danger">', '</div>');
		$this->form_validation->set_rules('nama_aset','nama','required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('id_kategori','Kategori','required|max_length[50]');
		$this->form_validation->set_rules('jumlah_aset','Jumlah Aset','required');
		$this->form_validation->set_rules('harga_aset','Harga Aset','required|min_length[3]|max_length[50]');

		if($this->form_validation->run() != false)
		{
			$id_pengajuan = $this->getID();
			$id_user = '1';
			$tgl_pengajuan = date("Y-m-d");
			$nama_aset = $this->input->post('nama_aset');
			$id_kategori = $this->input->post('id_kategori');
			$jumlah_aset = $this->input->post('jumlah_aset');
			$harga_aset = $this->input->post('harga_aset');
			$total_harga = $jumlah_aset * $harga_aset;

			$data = array(
				'id_pengajuan' => $id_pengajuan,
				'id_user' => $id_user,
				'tgl_pengajuan' => $tgl_pengajuan,
				'nama_aset' => $nama_aset,
				'id_kategori' => $id_kategori,
				'jumlah_aset' => $jumlah_aset,
				'harga_aset' => $harga_aset,
				'total_harga' => $total_harga,
				'status' => 0,
			);

			if($this->m_data_pengajuan->tambah($data)){
				$this->session->set_flashdata('tambah',"Data Berhasil Ditambahkan Ke Database !");
				return redirect('user/kelola_data_pengajuan');
			}else{
				return redirect('error');
			}
		}else{
			$data['title'] = "Pengajuan Aset | SIMA JNE";
			$data['menu'] = "pengajuan";
			$data['data_pengajuan'] = $this->m_data_pengajuan->get();
			$data['kategori'] = $this->m_data_pengajuan->getKategori();
			$this->load->view('user/template/header',$data);
			$this->load->view('user/template/sidenav');		
			$this->load->view('user/v_pengajuan');
			$this->load->view('user/template/footer');
			$this->load->view('user/template/__scriptData');
		}

	}
}
