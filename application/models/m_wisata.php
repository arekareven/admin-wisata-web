<?php 
 
class M_wisata extends CI_Model {

  function tampil_data(){
    return $this->db->get('wisata');
    }
    
    function tambah_data($data){

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
                            $this->db->insert('wisata',$data);
                            redirect('../wisata');
            }else {
                 $this->load->view('gagal');
            }
        }else {
         
          $this->load->view('gagal');
        }
  /*  $this->db->insert('wisata',$data);
    return TRUE;
    */

    }

    function ubah_data(){

      $idWisata = $this->input->post('idWisata');
      $namaWisata   = $this->input->post('namaWisata');
      $deskripsi   = $this->input->post('deskripsi');
      $alamat   = $this->input->post('alamat');
      $jamBuka   = $this->input->post('jamBuka');
      $jamTutup   = $this->input->post('jamTutup');
      $fasilitas   = $this->input->post('fasilitas');
      $kategori   = $this->input->post('kategori');
      $koordinat   = $this->input->post('koordinat');

      $path = './android/gambar/';

      $kondisi = array('idWisata' => $idWisata );

      // get foto
      $config['upload_path'] = './android/gambar';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['file_name'] = $_FILES['gambar']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['gambar']['name'])) {
              $this->upload->do_upload('gambar');
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
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

              $this->db->update('wisata',$data,$kondisi);
              redirect('../wisata');
	        }else {
            $gambar = $this->upload->data();
            $data = array(
                          'namaWisata'       => $namaWisata,
                          'deskripsi'       => $deskripsi,
                          'alamat'       => $alamat,
                          'jamBuka'       => $jamBuka,
                          'jamTutup'       => $jamTutup,
                          'fasilitas'       => $fasilitas,
                          'kategori'       => $kategori,
                          'koordinat'       => $koordinat,
                        );

            $this->db->update('wisata',$data,$kondisi);
            redirect('../wisata');
	        }
    }
    
    function hapus_data($idWisata){
        $this->db->where(array('idWisata' => $idWisata));
        $this->db->delete('wisata');
    redirect('../wisata');
    }

    function cek_id($idWisata) {
      $query = array('idWisata' => $idWisata);
      return $this->db->get_where('wisata', $query);
    }	

    
}