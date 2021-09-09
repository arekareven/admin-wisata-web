<?php 
 
class M_berita extends CI_Model {

  function tampil_data(){
    return $this->db->get('berita');
    }
    
    
    function tambah_data($data){

      $penulis   = $this->input->post('penulis');
      $judul   = $this->input->post('judul');
      $isi   = $this->input->post('isi');

      // get foto
      $config['upload_path'] = './android/gambar';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['file_name'] = $_FILES['gambar']['name'];

      $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array(
                              'penulis'       => $penulis,                           
                              'gambar'       => $gambar['file_name'],
                              'judul'       => $judul,
                              'isi'       => $isi,
                            );
                            $this->db->insert('berita',$data);
                            redirect('../berita');
            }else {
                 $this->load->view('gagal');
            }
        }else {
         
          $this->load->view('gagal');
        }

    }

    function ubah_data(){

      $idBerita = $this->input->post('idBerita');
      $penulis   = $this->input->post('penulis');
      $judul   = $this->input->post('judul');
      $isi   = $this->input->post('isi');

      $path = './android/gambar/';

      $kondisi = array('idBerita' => $idBerita );

      // get foto
      $config['upload_path'] = './android/gambar';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['file_name'] = $_FILES['gambar']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['gambar']['name'])) {
              $this->upload->do_upload('gambar');
	            $gambar = $this->upload->data();
	            $data = array(
                            'penulis'       => $penulis,                           
                            'gambar'       => $gambar['file_name'],
                            'judul'       => $judul,
                            'isi'       => $isi,
	                        );
              // hapus foto pada direktori
              //@unlink($path.$this->input->post('filelama'));

              $this->db->update('berita',$data,$kondisi);
              redirect('../berita');
	        }else {
            $gambar = $this->upload->data();
            $data = array(
                          'penulis'       => $penulis,
                          'judul'       => $judul,
                          'isi'       => $isi,
                        );

            $this->db->update('berita',$data,$kondisi);
            redirect('../berita');
	        }
    }
    
    function hapus_data($idBerita){
        $this->db->where(array('idBerita' => $idBerita));
        $this->db->delete('berita');
    redirect('../berita');
    }

    function cek_id($idBerita) {
      $query = array('idBerita' => $idBerita);
      return $this->db->get_where('berita', $query);
    }	

    
}