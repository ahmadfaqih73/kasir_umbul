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
SELECT nama_penjual,SUM(total_harga) FROM transaksi INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual WHERE waktu BETWEEN '2025-01-18' AND '2025-01-18';
 SELECT nama_penjual,nama_menu, jenis_dijual,harga,jumlah,total_harga FROM transaksi INNER JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.id_jenis_jualan INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual AND waktu BETWEEN '2025-01-18' AND '2025-01-18' ;
 SELECT nama_penjual,nama_menu, jenis_dijual,harga,jumlah,total_harga FROM transaksi INNER JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.id_jenis_jualan 
		INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual 
		AND waktu'2025-01-18' AND '2025-01-18' ;
		SELECT SUM(total_harga) FROM transaksi 
		INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual 
		WHERE waktu BETWEEN '2025-01-18' AND '2025-01-18';
		SELECT nama_penjual, waktu,jenis_dijual FROM transaksi
		 INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual  INNER JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.id_jenis_jualan
		 WHERE nama_penjual = 'Pak Rowaji' AND waktu BETWEEN '2025-01-18' AND '2025-01-18';


SELECT 
    penjual.nama_penjual, 
		transaksi.nama_menu,
    transaksi.waktu, 
    jenis_jualan.jenis_dijual, 
		transaksi.harga_jual,
    transaksi.jumlah, 
    transaksi.total_harga
    
FROM transaksi
JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual
JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.id_jenis_jualan
JOIN harga ON transaksi.jenis_menu = harga.jualan_jenis AND transaksi.penjual_nama = harga.penjual_id
WHERE penjual.nama_penjual = 'Pak Rowaji'  
AND transaksi.waktu BETWEEN '2025-01-18' AND '2025-01-18';

SELECT penjual_nama,jenis_menu,harga_jual,jumlah,total_harga FROM transaksi
JOIN penjual on transaksi.penjual_nama = penjual.id_penjual
JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.id_jenis_jualan
WHERE penjual_nama = '3' AND waktu BETWEEN '2025-01-18' AND '2025-01-18';

SELECT penjual_nama,jenis_menu,harga_jual,jumlah,total_harga FROM transaksi
JOIN penjual on transaksi.penjual_nama = penjual.nama_penjual
JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.jenis_dijual	
WHERE penjual_nama = '3' AND waktu BETWEEN '2025-01-18' AND '2025-01-18';

SELECT 
    penjual.nama_penjual, 
		transaksi.nama_menu,
    transaksi.waktu, 
    jenis_jualan.jenis_dijual, 
		transaksi.harga_jual,
    transaksi.jumlah, 
    transaksi.total_harga   
FROM transaksi
JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual
JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.id_jenis_jualan
WHERE penjual.nama_penjual = 'Pak Rowaji'  
AND transaksi.waktu BETWEEN '2025-01-18' AND '2025-01-18';
