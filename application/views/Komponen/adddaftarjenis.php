<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Jenis Jualan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('Daftarjenis/add_daftarjenis') ?>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jenis jualan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="jenismenu" placeholder="Nama Penjual">
                                </div>
                               
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" class="btn btn-warning float-left" onclick="window.history.back(-1)">Kembali</button>
                            
                                <button type="submit" class="btn btn-primary">Input</button>
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