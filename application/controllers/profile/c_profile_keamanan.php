<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_profile_keamanan extends CI_Controller {

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
	}

	public function index()
	{
		
		$this->load->view('profile/template/header');
		$this->load->view('profile/template/sidenav');		
		$this->load->view('profile/v_profile_keamanan');
		$this->load->view('profile/template/footer');
		$this->load->view('profile/template/__scriptData');

	}


}
