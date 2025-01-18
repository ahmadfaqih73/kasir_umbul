<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Laporan</h1>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url(); ?>Beranda">Beranda</a>
            </li>
            <li class="breadcrumb-item active">Laporan Barang</li>
          </ol>
          <div class="row">
           

            <!-- row kedua  -->
            <div class="col-lg-7" id="tanggalfilter">
                <div class="card">
                    <div class="card-header">
                    <strong>Form</strong> Filter by Tanggal
                    </div>
                    <form action="<?php echo base_url(); ?>Laporan/filter" method="POST" target="_blank">
                    <input type="hidden" name="nilaifilter" value="1">

                    <input name="valnilai" type="hidden">
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-2">
                                        <label for="select" class=" form-control-label">Dari tanggal</label>
                                </div>
                                <div class="col col-md-4">
                                        <input name="tanggalawal" value="" type="date"  class="form-control"  placeholder="Inputkan Jenis Bayar" id="tanggalawal" required="">
                                </div>
                                <div class="col col-md-2">
                                        <label for="select" class=" form-control-label">Sampai tanggal</label>
                                </div>
                                <div class="col col-md-4">
                                        <input name="tanggalakhir" value="" type="date"  class="form-control"  placeholder="Inputkan Jenis Bayar" id="tanggalakhir" required="">
                                </div>
                                <div class="col col-md-2">
                                        <label for="select" class=" form-control-label">Nama Barang</label>
                                </div>
                                <div class="col col-md-4">
                                        <div class="form-group">
                                          <select class="form-control" name="nama_brg" id="nama_brg">
                                            <option value="">Semua Barang</option>
                                            <?php foreach($databarang as $row) : ?>
                                            <option value="<?php echo $row->kd_barang ?>"><?php echo $row->nama_brg ?></option>
                                            <?php endforeach; ?>
                                          </select>
                                        </div>
                                </div>

                               <small class="help-block form-text"></small>
                            </div>

                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Print</button>
                            
                        </div>
                    </form>
                </div>
            </div>
      
         </div>
         
         <hr>
        
        
        <!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->