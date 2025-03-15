<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require APPPATH . 'vendor/autoload.php';
use chriskacerguis\RestServer\RestController;
use chriskacerguis\RestServer\Format;



// use Restserver\libraries\RestController;


class Mahasiswa extends RestController {

    public function __construct() {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
    }

    // GET: Ambil semua data mahasiswa
    public function index_get() {
        $id = $this->get('id');
        if ($id === NULL) {
            $mahasiswa = $this->mahasiswa_model->getAll();
        } else {
            $mahasiswa = $this->mahasiswa_model->getByID($id);
        }

        if ($mahasiswa) {
            $this->response($mahasiswa, RestController::HTTP_OK);
        } else {
            $this->response(['message' => 'Data tidak ditemukan'], RestController::HTTP_NOT_FOUND);
        }
    }

    // POST: Tambah data mahasiswa
    public function index_post() {
        $data = [
            'nama'  => $this->post('nama'),
            'nim'   => $this->post('nim'),
            'fakultas' => $this->post('fakultas'),
            'jurusan' => $this->post('jurusan')
        ];

        if ($this->mahasiswa_model->simpan($data)) {
            $this->response(['message' => 'Data berhasil ditambahkan'], RestController::HTTP_CREATED);
        } else {
            $this->response(['message' => 'Gagal menambahkan data'], RestController::HTTP_BAD_REQUEST);
        }
    }

    // PUT: Update data mahasiswa
    public function index_put() {
        $id = $this->put('id');
        $data = [
            'nama'  => $this->put('nama'),
            'nim'   => $this->put('nim'),
            'fakultas' => $this->put('fakultas'),
            'jurusan' => $this->put('jurusan')
        ];

        if ($this->mahasiswa_model->updatedata($id, $data)) {
            $this->response(['message' => 'Data berhasil diperbarui'], RestController::HTTP_OK);
        } else {
            $this->response(['message' => 'Gagal memperbarui data'], RestController::HTTP_BAD_REQUEST);
        }
    }

    // DELETE: Hapus data mahasiswa
    public function index_delete() {
        $data = json_decode(file_get_contents("php://input"), true);
        $id = $data['id'] ?? null;
        // $id = $this->delete('id');
        
        // echo 'id= '+ $id;
        
        if ($this->mahasiswa_model->hapus($id)) {
            $this->response(['message' => 'Data berhasil dihapus'], RestController::HTTP_OK);
        } else {
            $this->response(['message' => 'Gagal menghapus data'], RestController::HTTP_BAD_REQUEST);
        }
    }
}
