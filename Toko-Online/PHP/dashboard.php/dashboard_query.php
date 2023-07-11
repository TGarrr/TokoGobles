<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
	include 'database.php';
 
	// mengambil data barang
	$data_customer = mysqli_query($conn,"SELECT * FROM pelanggan");
 
	// menghitung data barang
	$jumlah_customer = mysqli_num_rows($data_customer);

    // mengambil data barang
	$data_produk = mysqli_query($conn,"SELECT * FROM product");
 
	// menghitung data barang
	$jumlah_produk = mysqli_num_rows($data_produk);

      // mengambil data barang
	$data_transaksi = mysqli_query($conn,"SELECT SUM(total_harga) as total_transaksi FROM

	(SELECT td.transactiondetail_id,p.harga_satuan,td.qty,
	  t.transaction_date, p.nama, p.harga_satuan*td.qty as total_harga
	  
	  FROM transaction_detail td
	  
	  INNER JOIN transactions t 
	  ON td.transaction_id = t.transaction_id
	  INNER JOIN product p 
	  ON td.produk_id = p.produk_id) AS A");
 
	// menghitung data barang
	$jumlah_transaksi = mysqli_fetch_array($data_transaksi);

	// $data_chart = mysqli_query($conn,"SELECT SUM(total_harga) as total_transaksi FROM

	// (SELECT td.transactiondetail_id,p.harga_satuan,td.qty,
	//   t.transaction_date, p.nama, p.harga_satuan*td.qty as total_harga
	  
	//   FROM transaction_detail td
	  
	//   INNER JOIN transactions t 
	//   ON td.transaction_id = t.transaction_id
	//   INNER JOIN product p 
	//   ON td.product_id = p.produk_id) AS A");
 
	// // menghitung data barang
	// $jumlah_chart = mysqli_fetch_array($data_chart);

	$nama_produk= "";
    $jumlah=null;
	 //Query SQL

	 
	 $hasil=mysqli_query($conn,"SELECT td.transactiondetail_id,p.harga_satuan,td.qty,
	 t.transaction_date, p.nama, p.harga_satuan*td.qty as total_transaksi
	 
	 FROM transaction_detail td
	 
	 INNER JOIN transactions t 
	 ON td.transaction_id = t.transaction_id
	 INNER JOIN product p 
	 ON td.produk_id = p.produk_id");
 
	 while ($data = mysqli_fetch_array($hasil)) {
		 //Mengambil nilai jurusan dari database
		 $nama=$data['nama'];
		 $nama_produk .= "'$nama'". ", ";
		 //Mengambil nilai total dari database
		 $jum=$data['total_transaksi'];
		 $jumlah .= "$jum". ", ";
 
	 }
?>