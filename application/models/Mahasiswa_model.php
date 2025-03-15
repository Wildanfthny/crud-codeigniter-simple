<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    private $table = "mahasiswa";

    public function getAll() {
        return $this->db->get($this->table)->result();
    }

    public function getByID($id) {
        return $this->db->get_where($this->table, ["id_mahasiswa" => $id])->row();
    }

    public function simpan($data) {
        return $this->db->insert($this->table, $data);
    }

    public function updatedata($id, $data) {
        return $this->db->update($this->table, $data, ['id_mahasiswa' => $id]);
    }

    public function hapus($id) {
        return $this->db->delete($this->table, ['id_mahasiswa' => $id]);
    }
}
