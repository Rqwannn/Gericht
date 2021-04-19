<?php

$idUser = $_POST["User"];

$conn = mysqli_connect("localhost", "root", "", "gericht");
$URL = mysqli_query($conn, "SELECT * FROM pesanan WHERE id_user = '$idUser'");
$book_table = mysqli_query($conn, "SELECT * FROM book_table WHERE id_user = '$idUser'");
$Result = [];

while ($row = mysqli_fetch_assoc($book_table)) {
    if (strtotime(date("Y-m-d")) <= strtotime($row['tanggal_pesan']) && $idUser == $row['id_user']) {
        $Result[] = $row;
    }
}

while ($row = mysqli_fetch_assoc($URL)) {
    if ($row["konfirmasi"] == 0 && $row['pembelian'] == 'Online' || $row['proses'] == 1) {
        $Result[] = $row;
    }
}

$Result["setTotal"] = count($Result);

echo json_encode($Result, JSON_PRETTY_PRINT);
