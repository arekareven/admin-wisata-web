<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title m-b-30"><b>Data User</b></h4>

            <div style="width:100%; text-align:right; margin-bottom:10px;">
                <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-plus"></i></a>

            </div>

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Password User</th>
                    <th>Level</th>
                    <th>Status User</th>
                    <th>Aksi</th>
                </tr>
                </thead>


                <tbody>
                <tr>
                    <td>1</td>
                    <td>Hanisyah</td>
                    <td>hanisyah</td>
                    <td>Administrator</td>
                    <td>Aktif</td>
                    <td>
                    <a href="#" class="on-default edit-row btn btn-primary" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-pencil"></i></a>
                    <a href="#" class="on-default remove-row btn btn-danger" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                    <td>2</td>
                    <td>Lala</td>
                    <td>karyawan123</td>
                    <td>Karyawan</td>
                    <td>Aktif</td>
                    <td>
                    <a href="#" class="on-default edit-row btn btn-primary" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-pencil"></i></a>
                    <a href="#" class="on-default remove-row btn btn-danger" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
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
                <h4 class="modal-title" id="custom-width-modalLabel">Data User</h4>
            </div>
        <form class="form-horizontal" role="form"> 
            <div class="modal-body">                                   
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama User</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="namaUser" name="namaUser" required>
                        </div>
                    </div>     
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password User</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div>
                    </div>                                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Level</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="level" name="level" required>
                        </div>
                    </div>                                          
                    <div class="form-group">
                        <label class="col-md-3 control-label">Status User</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="statusUser" name="statusUser" required>
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
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-success waves-effect waves-light">Ya</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->