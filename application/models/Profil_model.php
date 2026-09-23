<?php

class Profil_model extends CI_Model {

    public function getAllProfil() {
        return $this->db->get_where('profil', ['id' => 1])->row();
    }

    public function updateVisi($visi) {
        $this->db->where('id', 1);

        $this->db->update('profil', [
            'visi' => $visi
        ]);
    }

    public function updateMisi($misi)
    {
        $this->db->where('id', 1);

        $this->db->update('profil', [
            'misi' => $misi
        ]);
    }

    public function updateKepalaSekolah($kepala_sekolah)
    {
        $this->db->where('id', 1);

        $this->db->update('profil', [
            'kepala_sekolah' => $kepala_sekolah
        ]);
    }

    public function updateProfil($profil)
    {
        $this->db->where('id', 1);

        $this->db->update('profil', [
            'profil' => $profil
        ]);
    }

    public function updateAlamat($alamat)
    {
        $this->db->where('id', 1);

        $this->db->update('profil', [
            'alamat' => $alamat
        ]);
    }

}
