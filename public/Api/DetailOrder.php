<?php

$Id = $_POST["Id"];

$conn = mysqli_connect("localhost", "root", "", "gericht");
$query = mysqli_query($conn, "SELECT * FROM pesanan WHERE id = '$Id'");
$SetOrder = mysqli_fetch_assoc($query);


$Result = [];

$Result["Id"] = $SetOrder["id"];
$Result["Email"] = $SetOrder["email_pemesan"];
$Result["Nama"] = $SetOrder["nama_pemesan"];
$Result["Total_Harga"] = $SetOrder["total"];
$Result["Id_user"] = $SetOrder["id_user"];
$Result['kode_pemesanan'] = $SetOrder["kodePesanan"];
$Result["Jumlah_Pesanan"] = $SetOrder["jml_orderan"];
$Result["Nama_Pesanan"] = $SetOrder["nama_orderan"];
$Result["Tanggal_Pesanan"] = $SetOrder["tanggal_pesan"];
$Result["Konfirmasi"] = $SetOrder["konfirmasi"];

echo json_encode($Result, JSON_PRETTY_PRINT);
