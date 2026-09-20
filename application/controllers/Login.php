<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == false){
            $this->load->view('login');
        } else {
            $this->_login();
        }
        
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password= $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if($user) {
                if($password == $user['password']) {

                    $this->session->sess_regenerate(TRUE);

                    $data = [
                        'username' => $user['username'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah !</div>');
                    redirect('login');
                }
                
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak ditemukan !</div>');
            redirect('login');
        }
    }

    
}