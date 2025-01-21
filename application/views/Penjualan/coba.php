<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
          <div class="col-sm-6">
          <table>
    <tr>
        <th>Nama Penjual</th>
        <th>Waktu</th>
        <th>Jenis Dijual</th>
        <th>Harga Transaksi</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Harga Dari Harga Table</th>
        <th>Nama Menu Dari Harga Table</th>
    </tr>
    <?php foreach ($transaksi as $row): ?>
        <tr>
            <td><?= $row['nama_penjual']; ?></td>
            <td><?= $row['waktu']; ?></td>
            <td><?= $row['jenis_dijual']; ?></td>
            <td><?= $row['harga_transaksi']; ?></td>
            <td><?= $row['jumlah']; ?></td>
            <td><?= $row['total_harga']; ?></td>
            <td><?= $row['harga_dari_harga_table']; ?></td>
            <td><?= $row['nama_menu_harga']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>




    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->