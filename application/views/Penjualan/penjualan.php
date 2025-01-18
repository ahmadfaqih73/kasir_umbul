<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <h1 class="m-0">Daftar Harga</h1>
          <br>
          <a href="<?php echo base_url('Transaksi/index') ?>" class="btn btn-primary">Tambah Transaksi</a>
          <br><br>
          <div class="card">
            <div class="card-header">
              <table class="table table-bordered text-center table-hover table-striped" id="tableVariabel">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Penjual</th>
                    <th>Jenis Menu</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;
                  foreach ($ts as $value) {
                  ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $value['nama_penjual'] ?></td>
                      <td><?php echo $value['nama_menu'] ?></td>
                      <td><?php echo $value['jenis_dijual'] ?></td>
                      <td><?php echo 'Rp. ' . number_format($value['harga']) ?></td>
                      <td><?php echo $value['jumlah'] ?></td>
                      <td><?php echo 'Rp. ' . number_format($value['total_harga']) ?></td>
                      <td>
                        <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                        <a class="btn btn-info btn-sm" href="<?= base_url(); ?>Penjualan/viewVariabel_edit/<?= $value['id_transaksi']; ?>">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>Penjualan/hapus/<?= $value['id_transaksi']; ?>">
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