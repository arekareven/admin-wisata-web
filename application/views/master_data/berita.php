<style>
img{width:200px;
height:150px;}
</style>

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-14">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Data Berita</b></h4>
                            <div style="width: 100%; text-align: right; margin-bottom: 10px;">
                            <a href ="#" class ="on-default edit-row btn btn-primary" data-toggle="modal" data-target="#custom-width-modal" onClick="ResetInput()"><i class ="fa fa-plus"></i></a>
                            </div>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Penulis</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                </tr>
                                </thead>                   


                                <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($query->result() as $row){
                                echo "<tr>
                                <td>".$no."</td>
                                <td>".$row->penulis."</td>
                                <td><img src='".'http://localhost/wisataex/android/gambar/'.$row->gambar."'></td>
                                <td>".$row->judul."</td>
                                <td>".$row->isi."</td>
                                <td><a href ='#' class ='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$row->idBerita."','".$row->penulis."','".$row->gambar."','".$row->judul."','".$row->isi."')\"><i class ='fa fa-pencil'></i></a>
                                    <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInput2('".$row->idBerita."','".$row->penulis."','".$row->gambar."','".$row->judul."','".$row->isi."')\"><i class ='fa fa-trash'></i></a>
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
                                                    <h4 class="modal-title" id="custom-width-modalLabel">Data Berita</h4>
                                                </div>
                                            <form action="<?php echo base_url().'berita/add'; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                <div class="modal-body">                                                                               
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Penulis</label>
                                                    <div class="col-md-4">
                                                    <input type="hidden" id="idBerita" name="idBerita">
                                                        <input type="text" class="form-control" id="penulis" name="penulis" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
	                                                <label class="col-md-3 control-label">Judul</label>
	                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="judul" name="judul" required>
	                                                </div>
	                                            </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Gambar</label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control" id="gambar" name="gambar" multiple >
                                                    </div>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Isi</label>
                                                    <div class="col-md-9">
                                                    <textarea class="form-control" rows="5" id="isi" name="isi" required></textarea>
                                                        
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
                                                    <form action="<?php echo base_url(). 'berita/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="idBrt2" name="idBrt2">
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
    function SetInput( idBerita,penulis,gambar,judul,isi){
        document.getElementById('idBerita').value = idBerita;
        document.getElementById('penulis').value = penulis;
        document.getElementById('gambar').value = "";
        document.getElementById('judul').value = judul;
        document.getElementById('isi').value = isi;
    }
    function SetInput2(idBrt){
        document.getElementById('idBrt2').value = idBrt;
    }

    function ResetInput(penulis,gambar,judul,isi){
        document.getElementById('penulis').value = "";
        document.getElementById('gambar').value = "";
        document.getElementById('judul').value = "";
        document.getElementById('isi').value = "";
    }
</script>