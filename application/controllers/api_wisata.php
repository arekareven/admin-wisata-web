<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_wisata extends CI_Controller {
    function __construct(){
        parent::__construct();       
    }
    
    public function index()
    {
        $query = $this->db->query('select namaWisata,deskripsi,alamat,gambar,fasilitas,jamBuka,jamTutup,kategori,koordinat from wisata');
        echo json_encode($query->result());
    }

}