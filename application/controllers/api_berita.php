<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_berita extends CI_Controller {
    function __construct(){
        parent::__construct();       
    }
    
    public function index()
    {
        $query = $this->db->query('select penulis,judul,gambar,isi from berita');
        echo json_encode($query->result());
    }

}