<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <h1 class="m-0">Jenis Jualan</h1>
          <br>
          <a href="<?php echo base_url('Daftarjenis/viewadddaftarjenis') ?>" class="btn btn-primary">Tambah jenis menu</a>
          <br><br>
          <div class="card">
            <div class="card-header">
              <table class="table table-bordered text-center table-hover table-striped" id="tableVariabel">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Jenis menu</th>
                    <th>Status</th>


                  </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;
                  foreach ($df as $value) {
                  ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $value['jenis_dijual'] ?></td>
                      
                      <td>
                        <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                        <a class="btn btn-info btn-sm" href="<?= base_url(); ?>Daftarjenis/viewVariabel_edit/<?= $value['id_jenis_jualan']; ?>">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>Daftarjenis/hapus/<?= $value['id_jenis_jualan']; ?>">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                        </a>
                      </td>


                    </tr>
                  <?php $no++;
                  } ?>
                </tbody>
              </table>
            </div>
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
    $('#tableVariabel').DataTable();
  });
</script>