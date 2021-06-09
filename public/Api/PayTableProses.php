<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$id = $_POST["Id"];
$Name = $_POST["namaTable"];
$ValidateTable = mysqli_query($conn, "SELECT * FROM private_table WHERE tersedia < '1' AND nama = '$Name' ");

$Result = [];

if (mysqli_num_rows($ValidateTable)) {
    $Result["status"] = false;
    $Result["massage"] = "Sorry the table you ordered is full";
    echo json_encode($Result);
    die;
}

$getTotal = mysqli_query($conn, "SELECT * FROM book_table WHERE id = '$id' ");
$cekOne = mysqli_fetch_assoc($getTotal);

$getTotalByFetch = $cekOne["total"];
$getNameByFetch = $cekOne["nama_meja"];

$confirm = 0;
$success = 1;
$Pay = mysqli_query($conn, "UPDATE book_table SET proses = '$confirm', konfirmasi = '$success'  WHERE id = '$id'");

mysqli_query($conn, "UPDATE private_table SET tersedia = tersedia - '$getTotalByFetch' WHERE nama = '$getNameByFetch' ");

$Result["Id"] = $id;

echo json_encode($Result, JSON_PRETTY_PRINT);

return mysqli_affected_rows($conn);
