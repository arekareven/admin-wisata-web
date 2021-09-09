<style>

img{width:200px;

height:150px;

}

</style>

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-14">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Data Wisata</b></h4>
                            <div style="width: 100%; text-align: right; margin-bottom: 10px;">
                            <a href ="#" class ="on-default edit-row btn btn-primary" data-toggle="modal" data-target="#custom-width-modal" onClick="ResetInput()"><i class ="fa fa-plus"></i></a>
                            </div>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Wisata</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Alamat</th>
                                    <th>Jam Buka</th>
                                    <th>Jam Tutup</th>
                                    <th>Fasilitas</th>
                                    <th>Kategori</th>
                                    <th>koordinat</th>
                                </tr>
                                </thead>
                                


                                <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($query->result() as $row){
                                echo "<tr>
                                <td>".$no."</td>
                                <td>".$row->namaWisata."</td>
                                <td><img src='".'http://localhost/wisataex/android/gambar/'.$row->gambar."'></td>
                                <td>".$row->deskripsi."</td>
                                <td>".$row->alamat."</td>
                                <td>".$row->jamBuka."</td>
                                <td>".$row->jamTutup."</td>
                                <td>".$row->fasilitas."</td>
                                <td>".$row->kategori."</td>
                                <td>".$row->koordinat."</td>
                                <td><a href ='#' class ='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$row->idWisata."','".$row->namaWisata."','".$row->deskripsi."','".$row->alamat."','".$row->jamBuka."','".$row->jamTutup."','".$row->gambar."','".$row->fasilitas."','".$row->kategori."','".$row->koordinat."')\"><i class ='fa fa-pencil'></i></a>
                                    <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInput2('".$row->idWisata."','".$row->namaWisata."','".$row->deskripsi."','".$row->alamat."','".$row->jamBuka."','".$row->jamTutup."','".$row->gambar."','".$row->fasilitas."','".$row->kategori."','".$row->koordinat."')\"><i class ='fa fa-trash'></i></a>
                                </td>
                            
                                
                            </tr>";
                            $no++;
                                    
                            } 
                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                                <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:55%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="custom-width-modalLabel">Data Wisata</h4>
                                                </div>
                                            <form action="<?php echo base_url(). 'wisata/add'; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                <div class="modal-body">                                                                               
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Nama Wisata</label>
                                                    <div class="col-md-4">
                                                    <input type="hidden" id="idWisata" name="idWisata">
                                                        <input type="text" class="form-control" id="namaWisata" name="namaWisata" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
	                                                <label class="col-md-3 control-label">Deskripsi</label>
	                                                <div class="col-md-9">
	                                                    <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" required></textarea>
	                                                </div>
	                                            </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Alamat</label>
                                                    <div class="col-md-9">
                                                    <textarea class="form-control" rows="5" id="alamat" name="alamat" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Jam Buka / Jam Tutup</label>
                                                    <div class="col-md-2">
                                                    <input type="time" class="form-control" id="jamBuka" name="jamBuka" required>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <input type="time" class="form-control" id="jamTutup" name="jamTutup" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Gambar</label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control" id="gambar" name="gambar" multiple >
                                                        <input type="hidden" class="form-control" id="filelama" name="filelama"  >
                                                    </div>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Fasilitas</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="fasilitas" name="fasilitas" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Kategori</label>
                                                    <div class="col-md-3">
                                                        <select class="form-control" data-style="btn-white" id="kategori" name="kategori" required>
                                                            <option>Alam</option>
                                                            <option>Taman</option>
                                                            <option>Wahana</option>
                                                            <option>Kuliner</option>
                                                            <option>Sejarah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Koordinat</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="koordinat" name="koordinat" required>
                                                    </div>
                                                </div>
                                                </div>
                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                </div>
                                            </form>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                        <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <form action="<?php echo base_url(). 'wisata/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="idWst2" name="idWst2">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-success waves-effect waves-light">Ya</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->            

<script type="text/javascript">
    function SetInput( idWisata,namaWisata,deskripsi, alamat,jamBuka,jamTutup,gambar,fasilitas,kategori,koordinat){
        document.getElementById('idWisata').value = idWisata;
        document.getElementById('namaWisata').value = namaWisata;
        document.getElementById('deskripsi').value = deskripsi  ;
        document.getElementById('alamat').value = alamat;
        document.getElementById('jamBuka').value = jamBuka;
        document.getElementById('jamTutup').value = jamTutup;
        document.getElementById('gambar').value = "";
        document.getElementById('fasilitas').value = fasilitas;
        document.getElementById('kategori').value = kategori;
        document.getElementById('koordinat').value = koordinat;
    }
    function SetInput2(idWst){
        document.getElementById('idWst2').value = idWst;
    }

    function ResetInput(namaWisata,deskripsi, alamat,jamBuka,jamTutup,gambar,fasilitas,kategori,koordinat){
        document.getElementById('namaWisata').value = "";
        document.getElementById('deskripsi').value = ""  ;
        document.getElementById('alamat').value = "";
        document.getElementById('jamBuka').value = "";
        document.getElementById('jamTutup').value = "";
        document.getElementById('gambar').value = "";
        document.getElementById('fasilitas').value = "";
        document.getElementById('kategori').value = "";
        document.getElementById('koordinat').value = "";
    }
</script>