<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->model('Profil_model');
        $this->load->model('Industri_model');
    }

	public function index() {
		$data['profil'] = $this->Profil_model->getAllProfil();
        $data['industri'] = $this->Industri_model->getAllIndustri();

		$this->load->view('home', $data);
	}


	
}
