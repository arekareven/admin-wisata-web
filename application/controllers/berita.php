<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    function __construct(){
        parent::__construct();      
                $this->load->model('m_berita');
                $this->load->helper('url');                
                $this->load->library('upload');
    }

    
    public function index()
    {
        $data['query'] = $this->m_berita->tampil_data();
        
        $this->load->view('header', $data);
        $this->load->view('master_data/berita',$data);
        $this->load->view('footer' ,$data);
    }

    public function add(){
        $idBerita = $this->input->post('idBerita');

        $query = $this->m_berita->cek_id($idBerita)->num_rows();
        if(empty($query)) 
            $this->m_berita->tambah_data($idBerita);
        else 
        $this->m_berita->ubah_data($idBerita);
              
    }

    public function delete(){
        $idBrt = $this->input->post('idBrt2');
        
        $this->m_berita->hapus_data($idBrt);
    }
}