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
        <th>Jenis Dijual</th>
        <th>Harga Transaksi</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
       
    </tr>
  
    <?php foreach ($transaksi as $row): ?>
        <tr>
            <td><?= $row['nama_penjual']; ?></td>
            <td><?= $row['jenis_dijual']; ?></td>
            <td><?= $row['harga_jual']; ?></td>
            <td><?= $row['jumlah']; ?></td>
            <td><?= $row['total_harga']; ?></td>
        </tr>
    <?php endforeach; ?>
      <tr>
        <th>
            sub total
        </th>
    </tr>
</table>




    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->