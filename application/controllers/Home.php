<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('username')) {
            redirect('home');
        }

        if ($this->session->userdata('role') != 'admin') {
            redirect('home');
        }

        $this->load->model('Profil_model');
    }

	public function index() {
		$data['profil'] = $this->Profil_model->getAllProfil();
		$this->load->view('home', $data);
	}


	
}
