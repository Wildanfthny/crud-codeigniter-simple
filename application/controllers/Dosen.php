<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{
    public function __construct(){
        
        parent::__construct();
        $this->load->model('dosen_model');
        $this->load->library('form_validation');   
        $this->load->helper('url');    

        
    }

    public function index(){
        $data['dosen'] = $this->dosen_model->getAll();
        $this->load->view('indexdosen', $data);
    }

    public function inputdatadosen(){
        $this->load->view('tambahdatadosen');
    }

    public function simpandatadosen(){
        $dosen = $this->dosen_model;
        $validation = $this->form_validation;
        $validation->set_rules($dosen->rules());

        if ($validation->run()){
            $dosen->simpandosen();            
            $this->session->set_flashdata('success','Data Berhasil disimpan!');
            redirect(site_url('dosen/inputdatadosen'));   
            
        }

        redirect(site_url('dosen/inputdatadosen'));
             
    }

    public function editdatadosen($iddosennya = null){
        if(!isset($iddosennya)) redirect('dosen/inputdatadosen');

        $data['dosen'] = $this->dosen_model->getByID($iddosennya);
        if (!$data['dosen']) show_404();
        $this->load->view('editdatadosen',$data);
    }

    public function updatedatadosen(){
        
        $dosen = $this->dosen_model;
        $validation = $this->form_validation;
        $validation->set_rules($dosen->rules());

        if ($validation->run()){
            $dosen->updatedatadosen();
            $this->session->set_flashdata('success','Data Berhasil diperbaharui');            
            redirect(site_url('dosen'));
        }
    
    }    

    public function hapusdatadosen($iddosennya = null){
        if (!isset($iddosennya)) show_404();

        if ($this->dosen_model->hapusdosen($iddosennya)){
            $this->session->set_flashdata('delete','Data Berhasil Dihapus!');
            redirect(site_url('dosen'));
        }
    }
}