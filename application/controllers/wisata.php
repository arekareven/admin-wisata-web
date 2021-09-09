<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
    function __construct(){
        parent::__construct();      
                $this->load->model('m_wisata');
                $this->load->helper('url');                
                $this->load->library('upload');
    }

    
    public function index()
    {
        $data['query'] = $this->m_wisata->tampil_data();
        
        $this->load->view('header', $data);
        $this->load->view('master_data/wisata',$data);
        $this->load->view('footer' ,$data);
    }

    public function add(){
        $idWisata = $this->input->post('idWisata');

        $query = $this->m_wisata->cek_id($idWisata)->num_rows();
        if(empty($query)) 
            $this->m_wisata->tambah_data($idWisata);
        else 
            $this->m_wisata->ubah_data($idWisata);
            
/*
            $namaWisata   = $this->input->post('namaWisata');
            $deskripsi   = $this->input->post('deskripsi');
            $alamat   = $this->input->post('alamat');
            $jamBuka   = $this->input->post('jamBuka');
            $jamTutup   = $this->input->post('jamTutup');
            $fasilitas   = $this->input->post('fasilitas');
            $kategori   = $this->input->post('kategori');
            $koordinat   = $this->input->post('koordinat');
      
            // get foto
            $config['upload_path'] = './android/gambar';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';  //2MB max
            $config['max_width'] = '4480'; // pixel
            $config['max_height'] = '4480'; // pixel
            $config['file_name'] = $_FILES['gambar']['name'];
      
            $this->upload->initialize($config);
      
              if (!empty($_FILES['gambar']['name'])) {
                  if ( $this->upload->do_upload('gambar') ) {
                      $gambar = $this->upload->data();
                      $data = array(
                                    'namaWisata'       => $namaWisata,
                                    'deskripsi'       => $deskripsi,
                                    'alamat'       => $alamat,
                                    'jamBuka'       => $jamBuka,
                                    'jamTutup'       => $jamTutup,                            
                                    'gambar'       => $gambar['file_name'],
                                    'fasilitas'       => $fasilitas,
                                    'kategori'       => $kategori,
                                    'koordinat'       => $koordinat,
                                  );
                                  $this->m_wisata->tambah_data($data);
                                  redirect('../wisata');
                  }else {
                       $this->load->view('gagal');
                  }
              }else {
               
                $this->load->view('gagal');
              }

        */
        
    }
    


    public function delete(){
        $idWst = $this->input->post('idWst2');
        
        $this->m_wisata->hapus_data($idWst);
    }
}