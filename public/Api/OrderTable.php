<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$id_user = $_POST["id_user"];
$KodePesanan = time();
$namaTabel = $_POST["NamaTabel"];
$nama = $_POST["Nama"];
$email = $_POST["Email"];
$total = $_POST["Total"];
$date = $_POST["MessageDate"];
$konfirmasi = 0;
$Proses = 1;

$ValidateTable = mysqli_query($conn, "SELECT * FROM private_table WHERE tersedia < '1' AND nama = '$namaTabel' ");

if (mysqli_num_rows($ValidateTable)) {
    echo json_encode('Table Is Not Available');
    die;
}

$cekStatus = mysqli_query($conn, "SELECT * FROM user WHERE name = '$id_user' ");
$getStatus = mysqli_fetch_assoc($cekStatus);

$setTax = 0;

if ($getStatus["status"] == "Member") {
    $setTax = 6;
} else {
    $setTax = 3;
}

mysqli_query($conn, "INSERT INTO book_table VALUES('', '$id_user', '$KodePesanan' ,'$namaTabel', '$email' ,'$nama', '$total', '$konfirmasi' , '$setTax' , '$Proses' , '$date')");
$getBookTable = mysqli_query($conn, "SELECT * FROM book_table WHERE kodePesanan = '$KodePesanan'");
$getSingle = mysqli_fetch_assoc($getBookTable);

$Result = [];
$Result["nama"] = $nama;
$Result['id'] = $getSingle['id'];

echo json_encode($Result, JSON_PRETTY_PRINT);

return mysqli_affected_rows($conn);
