<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$id_user = $_POST["id_user"];
$namaTabel = $_POST["NamaTabel"];
$nama = $_POST["Nama"];
$email = $_POST["Email"];
$total = $_POST["Total"];
$date = $_POST["MessageDate"];
$konfirmasi = 0;
$Proses = 1;

$cekStatus = mysqli_query($conn, "SELECT * FROM user WHERE name = '$id_user' ");
$getStatus = mysqli_fetch_assoc($cekStatus);

$setTax = 0;

if ($getStatus["status"] == "Member") {
    $setTax = 6;
} else {
    $setTax = 3;
}

mysqli_query($conn, "INSERT INTO book_table VALUES('', '$id_user', '$namaTabel', '$email' ,'$nama', '$total', '$konfirmasi' , '$setTax' , '$Proses' , '$date')");

$Result = [];
$Result["nama"] = $nama;

echo json_encode($Result, JSON_PRETTY_PRINT);

return mysqli_affected_rows($conn);
