<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> Transaksi </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('Transaksi/add_transaksi') ?>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Menu</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="namamenu" placeholder="Nama Menu">
                                </div>
                                <div class="form-group">
                                    <label>Nama Penjual</label>
                                     <select class="form-control" id="selectpenjual" name="namapenjual" aria-placeholder="namapenjual">
                                    </select>
                                     </div>
                                    <div class="form-group">
                                        <label>Jenis Menu</label>
                                         <select class="form-control" id="selectjenis" name="jenis" aria-placeholder="namajenis">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="harga" placeholder="Harga">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah</label>
                                    <input type="number" min="1" id="jml-barang" name="jumlah" class="form-control" placeholder="Jumlah">
                                    </div>
                                </div>
            </div>
                                

                            <div class="form-group">
            
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#selectpenjual').select2('focus');
        $('#selectpenjual').select2('open');
    });

 

    $('#selectpenjual').select2({
        theme: 'bootstrap4',
        placeholder: 'Namapenjual',
        ajax: {
            url: '<?php echo base_url('Daftarharga/getNamaPenjual') ?>',
            type: 'POST',
            dataType: 'json',
            data: params => ({
                nama_penjual: params.term
            }),
            processResults: data => ({
                results: data
            }),
            cache: true
        }
    });

   
    // $(document).ready(function() {
    //     $('#selectjenis').select2('focus');
    //     $('#selectjenis').select2('open');
    // });

    $('#selectjenis').select2({
        theme: 'bootstrap4',
        placeholder: 'namajenis',
        ajax: {
            url: '<?php echo base_url('Daftarharga/getJenis') ?>',
            type: 'POST',
            dataType: 'json',
            data: params => ({
                jenis_dijual: params.term
            }),
            processResults: data => ({
                results: data
            }),
            cache: true
        }
    });
</script>