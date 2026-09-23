<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller {

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
        $this->template->load('layouts/admin/template', 'admin/profil', $data);
    }

    public function updateVisi()
    {
        $visi = $this->input->post('visi');
        $this->session->set_flashdata('success', 'Berhasil Diupdate!');
        $this->Profil_model->updateVisi($visi);

        redirect('admin/profil');
    }

    public function updateMisi()
    {
        $misi = $this->input->post('misi');
        $this->session->set_flashdata('success', 'Berhasil Diupdate!');
        $this->Profil_model->updateMisi($misi);

        redirect('admin/profil');
    }

    public function updateKepalaSekolah()
    {
        $kepsek = $this->input->post('kepala_sekolah');
        $this->session->set_flashdata('success', 'Berhasil Diupdate!');
        $this->Profil_model->updateMisi($kepsek);

        redirect('admin/profil');
    }

    public function updateAlamat()
    {
        $alamat = $this->input->post('alamat');
        $this->session->set_flashdata('success', 'Berhasil Diupdate!');
        $this->Profil_model->updateAlamat($alamat);

        redirect('admin/profil');
    }
}
