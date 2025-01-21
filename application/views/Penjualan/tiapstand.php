<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Laporan Tiap stand </h3>
              <form action ="<?php echo base_url(); ?>Coba/index" method="POST" target="_blank"> 
              
              <input name="valnilai" type="hidden">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
            <input type="hidden" name="nilaistand" value="1">
                 </div>
              <div class="form-group">
                <label for="inputEstimatedBudget">Tanggal Awal</label>
                
                <input name="tanggalawal" value="" type="date"  class="form-control"  placeholder="Tanggal awal" id="tanggalawal" required="">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input name="tanggalakhir" value="" type="date"  class="form-control"  placeholder="Tanggal akhir" id="tanggalakhir" required="">
              </div>
                <div class="form-group">
                    <label>Nama Penjual</label>
                         <select class="form-control" id="selectpenjual" name="namapenjual" aria-placeholder="namapenjual">
                            </select>
                 </div>
               <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
              </form>

             
      </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
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

   
 
  
</script>