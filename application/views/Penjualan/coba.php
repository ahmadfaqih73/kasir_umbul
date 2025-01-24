<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
          <div class="col-sm-6">
            <style>
                h1 {
      font-family: Arial;
      text-transform: uppercase;
      font-weight: 400;
      margin-top: 10px;
      text-align: center;
      color: black
    }
    p {
      color: black;
      font-family: Arial;
      font-weight: 400;
    }
    .total {
      text-align: left;
      margin-right: 20px;
    }
    .text {
      font-size: 16px;
    }
    .harga {
      font-size: 24px;
      margin-top: -15px;
    }
    .bulan {
      text-align: center;
      margin-top: 0px;
      font-size: 20px;
    }
    hr {
      width: 50%;
      margin-top: -10px;
    }
    #tabel {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }
    #tabel td,
    #tabel th {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }
    #tabel th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #6777EF;
      color: white;
    }
            </style>
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
    
</table>
    </div><!-- /.container-fluid -->
    <div class="total"   >
    <?php foreach ($jumlah as $rowe): ?>
    <p class="text"></p>
    <p class="harga"> Hasil Penjualan Rp. <?= number_format($rowe['total'], 0, ',', '.') ?></p>
    <p class="harga"> Potongan Rp. <?= number_format($rowe['total_setelah_diskon'], 0, ',', '.') ?></p>
    <p class="harga"> Sisa Hasil Rp. <?= number_format($rowe['total_akhir'], 0, ',', '.') ?></p>
    <?php endforeach; ?>
  </div>
  </div>
  <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->