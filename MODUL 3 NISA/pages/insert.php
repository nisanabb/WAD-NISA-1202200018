<?php

include('../config/connector.php');

$idMobil = rand();
$namaMobil = $_POST['nama_mobil'];
$namaPemilik = $_POST['pemilik_mobil'];
$merk = $_POST['merk_mobil'];
$tglBeli = $_POST['tanggal_beli'];
$deskripsi = $_POST['deskripsi'];

$foto = $_FILES["foto_mobil"]["name"];
$temp = $_FILES["foto_mobil"]["tmp_name"];
$folder = "../asset/images/" . $foto;
move_uploaded_file($temp, '../asset/images/' . $foto);
$pembayaran = $_POST['status_pembayaran'];

$query = mysqli_query($connect, "INSERT INTO users(id_mobil,nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
                                         VALUES('$idMobil','$namaMobil','$namaPemilik','$merk','$tglBeli','$deskripsi','$foto','$pembayaran')");

if ($query) {
    echo '<a href="ListCar-Nisa.php">Data Berhasil Ditambahkan</a>';
} else {
    echo '<a href="ListCar-Nisa.php">Data Gagal Ditambahkan</a>';
}
