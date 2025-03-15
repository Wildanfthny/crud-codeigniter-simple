<?php defined('BASEPATH') OR exit ('No direct script access allowed!');

class Dosen_model extends CI_Model {
    private $_table = "dosen";

    public $id_dosen;
    public $nama_dosen;
    public $nip;
    public $fakultas_dosen;
    public $jurusan_dosen;

    public function rules(){
        return [
            ['field' => 'nama_dosen',
            'label' => 'Nama Dosen',
            'rules' => 'required'],

            ['field' => 'nip',
            'label' => 'NIP', 
            'rules' => 'required'],            

            ['field' => 'fakultas_dosen',
            'label' => 'Fakultas Dosen',
            'rules' => 'required'],

            ['field' => 'jurusan_dosen',
            'label' => 'Jurusan_Dosen',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        $this->db->order_by('waktu_input_dosen','desc');        
        return $this->db->get($this->_table)->result();
    }

    public function getByID($iddosennya){
        return $this->db->get_where($this->_table, ["id_dosen" => $iddosennya])->row();
    }

    public function simpandosen(){

        $post = $this->input->post();
        $this->id_dosen = uniqid();
        $this->nama_dosen = $post['nama_dosen'];
        $this->nip = $post['nip'];
        $this->fakultas_dosen = $post['fakultas_dosen'];
        $this->jurusan_dosen = $post['jurusan_dosen'];
        $this->db->insert($this->_table, $this);

    }

    public function updatedatadosen(){
        $post = $this->input->post();
        $this->id_dosen = $post['iddosennya'];
        $this->nama_dosen = $post['nama_dosen'];
        $this->nip = $post['nip'];
        $this->fakultas_dosen = $post['fakultas_dosen'];
        $this->jurusan_dosen = $post['jurusan_dosen'];
        $this->db->update($this->_table, $this, array('id_dosen' => $post['iddosennya']));
    }

    public function hapusdosen($iddosennya){
        return $this->db->delete($this->_table, array('id_dosen' => $iddosennya));
    }

}

?>