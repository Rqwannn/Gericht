<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$id = $_POST["Id"];

$getTotal = mysqli_query($conn, "SELECT * FROM book_table WHERE id = '$id' ");
$cekOne = mysqli_fetch_assoc($getTotal);

$getTotalByFetch = $cekOne["total"];
$getNameByFetch = $cekOne["nama_meja"];

$confirm = 0;
$success = 1;
$Pay = mysqli_query($conn, "UPDATE book_table SET proses = '$confirm', konfirmasi = '$success'  WHERE id = '$id'");

mysqli_query($conn, "UPDATE private_table SET tersedia = tersedia - '$getTotalByFetch' WHERE nama = '$getNameByFetch' ");

$Result = [];

$Result["Id"] = $id;

echo json_encode($Result, JSON_PRETTY_PRINT);

return mysqli_affected_rows($conn);
