<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

// Table Pesanan

$id_user = $_POST["id_user"];
$Nama_Pesanan = $_POST["Nama_Pesanan"];
$Jumlah_Pesanan = $_POST["Jumlah_Pesanan"];
$Email = $_POST["Email"];
$Nama = $_POST["Nama"];
$Total_Harga = $_POST["Total_Harga"];
$KodePesanan = time();
$Konfirmasi = 0;
$proses = 0;

$Pesanan = mysqli_query($conn, "INSERT INTO pesanan VALUES('', '$id_user', '$KodePesanan' ,'$Nama_Pesanan', '$Jumlah_Pesanan' ,'$Nama', '$Email', null, '$Total_Harga', '$proses' ,$Konfirmasi) ");

$getDate = mysqli_query($conn, "SELECT * FROM pesanan WHERE kodePesanan = '$KodePesanan'");
$getAssocDate = mysqli_fetch_assoc($getDate);

$Result = [];

$Result["Id"] = $getAssocDate["id"];
$Result["Email"] = $_POST["Email"];
$Result["Nama"] = $_POST["Nama"];
$Result["Total_Harga"] = $_POST["Total_Harga"];
$Result["Id_user"] = $_POST["id_user"];
$Result['kode_pemesanan'] = $KodePesanan;
$Result["Jumlah_Pesanan"] = $Jumlah_Pesanan;
$Result["Nama_Pesanan"] = $Nama_Pesanan;
$Result["Tanggal_Pesanan"] = $getAssocDate["tanggal_pesan"];
$Result["Konfirmasi"] = $Konfirmasi;

echo json_encode($Result, JSON_PRETTY_PRINT);

return mysqli_affected_rows($conn);
