<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industri_model extends CI_Model {

    public function getAllIndustri() {
        return $this->db->get('industri')->result();
    }

    public function getById($id) {
        return $this->db->get_where('industri', [
            'id' => $id
        ])->row();
    }

    public function tambah($data) {
        return $this->db->insert('industri', $data);
    }

    public function hapus($id) {
        return $this->db->delete('industri', [
            'id' => $id
        ]);
    }
}