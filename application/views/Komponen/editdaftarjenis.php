<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Penjual </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('Daftarjenis/edit') ?>
                        <form>
                        <input type="hidden" id="id" name="id" value="<?= $df['id_jenis_jualan']; ?>">
                            <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Penjual</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="jenis" placeholder="Nama Penjual" 
                                    value="<?= $df['jenis_dijual']; ?>">
                                </div>
                               
                            </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" class="btn btn-warning float-left" onclick="window.history.back(-1)">Kembali</button>
                            
                                <button type="submit" class="btn btn-primary">edit</button>
                            </div>
                        </form>
                        <?php echo form_close() ?>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->