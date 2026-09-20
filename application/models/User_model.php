<?php

class User_model extends CI_Model {

    public function cek_login($username) {
        return $this->db->get_where('user', ['username' => $username])->row();
    }
}