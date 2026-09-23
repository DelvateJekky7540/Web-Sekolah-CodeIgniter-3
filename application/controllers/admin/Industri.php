
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Industri_model');
        $this->load->helper(['url', 'form']);
    }

    // Menampilkan semua data industri
    public function index() {
        $data['industri'] = $this->Industri_model->getAllIndustri();
        $this->template->load('layouts/admin/template', 'admin/industri', $data);
    }

    // Form tambah industri
    public function tambah() {
        if ($this->input->method() === 'post') {

            $this->load->library('upload');

            $config['upload_path'] = './assets/img/industri/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp|svg';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['logo_industri']['name'];

            // Pastikan folder upload tersedia
            if (!is_dir($config['upload_path'])) {
                mkdir($config['upload_path'], 0755, true);
            }

            $this->upload->initialize($config);

            $logo = '';

            if (!empty($_FILES['logo_industri']['name'])) {

                if ($this->upload->do_upload('logo_industri')) {
                    $upload_data = $this->upload->data();
                    $logo = $upload_data['file_name'];
                } else {
                    $data['title'] = 'Tambah Industri';
                    $data['error'] = $this->upload->display_errors();

                    $this->load->view('industri/tambah', $data);
                    return;
                }
            }

            $data = [
                'nama_industri' => $this->input->post('nama_industri', true),
                'logo_industri' => $logo,
                'bidang_industri' => $this->input->post('bidang_industri', true)
            ];

            $this->Industri_model->tambah($data);

            redirect('industri');
        }

        $data['title'] = 'Tambah Industri';

        $this->load->view('industri/tambah', $data);
    }

    // Hapus data industri
    public function hapus($id) {
        $industri = $this->Industri_model->getById($id);

        if (!$industri) {
            show_404();
        }

        if (!empty($industri->logo_industri)) {
            $path = './assets/img/industri/' . $industri->logo_industri;

            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->Industri_model->hapus($id);

        redirect('industri');
    }
}