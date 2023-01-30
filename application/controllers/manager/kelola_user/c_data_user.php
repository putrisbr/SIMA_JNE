<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_data_user extends CI_Controller {

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
		$this->load->model('manager/m_data_user','m_data_user');
	}

	public function index()
	{
		$data['data_user'] = $this->m_data_user->get();
		$this->load->view('manager/kelola_user/template/header');
		$this->load->view('manager/kelola_user/template/sidenav');		
		$this->load->view('manager/kelola_user/data_user',$data);
		$this->load->view('manager/kelola_user/template/footer');
		$this->load->view('manager/kelola_user/template/__scriptData');

	}

	public function getID($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public function tambah()
	{
		$this->form_validation->set_error_delimiters('<div class="mt-1 alert alert-danger">', '</div>');
		$this->form_validation->set_rules('nama_user','nama','required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('email','Email','required|max_length[50]');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('username','username','required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('password','password','required|min_length[5]|max_length[50]');

		if($this->form_validation->run() != false)
		{
			$id_user = $this->getID();
			$nama_user = $this->input->post('nama_user');
			$alamat = $this->input->post('alamat');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			return redirect('asdas');
		}else{
			$data['data_user'] = $this->m_data_user->get();
			$this->load->view('manager/kelola_user/template/header');
			$this->load->view('manager/kelola_user/template/sidenav');		
			$this->load->view('manager/kelola_user/data_user',$data);
			$this->load->view('manager/kelola_user/template/footer');
			$this->load->view('manager/kelola_user/template/__scriptData');
		}

	}
}
