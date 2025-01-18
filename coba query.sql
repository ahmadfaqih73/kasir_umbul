SELECT * FROM transaksi WHERE waktu(DATE) BETWEEN '2025-01-18' AND '2025-01-18'ORDER BY waktu(Date) ASC;
SELECT * from transaksi where waktu BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY waktu ASC 
SELECT penjual_nama ,SUM(total_harga) as total FROM transaksi JOIN penjual ON penjual.id_penjual = transaksi.id_transaksi WHERE DATE(waktu) BETWEEN '2025-01-18' AND '2025-01-18', penjual_nama = 7;
SELECT penjual_nama,SUM(total_harga) as total FROM transaksi JOIN penjual ON penjual.id_penjual = transaksi.penjual_nama WHERE penjual_nama = 7;
SELECT waktu,SUM(total_harga) AS total,penjual_nama FROM transaksi JOIN penjual ON penjual.id_penjual = transaksi.id_transaksi  WHERE penjual_nama = 7 AND DATE(waktu) BETWEEN  '2025-01-18' AND '2025-01-18';
SELECT nama_penjual,SUM(total_harga) as total FROM transaksi JOIN penjual ON penjual.id_penjual = transaksi.penjual_nama WHERE DATE(waktu) BETWEEN  '2025-01-18' AND '2025-01-18',nama_penjual = 'Pak Habib';
SELECT nama_penjual FROM transaksi INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual;
SELECT nama_penjual,SUM(total_harga) FROM transaksi INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual WHERE nama_penjual = 'Pak Habib';
SELECT waktu FROM transaksi WHERE waktu BETWEEN '2025-01-18' AND '2025-01-18';
 SELECT * FROM transaksi;
 SELECT nama_penjual,nama_menu, jenis_dijual,harga,jumlah,total_harga FROM transaksi INNER JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.id_jenis_jualan INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual ;