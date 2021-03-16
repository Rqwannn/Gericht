<?php

$idUser = $_POST["User"];

$conn = mysqli_connect("localhost", "root", "", "gericht");
$URL = mysqli_query($conn, "SELECT * FROM pesanan WHERE id_user = '$idUser'");
$Result = [];

while ($row = mysqli_fetch_assoc($URL)) {
    if ($row["konfirmasi"] == 0) {
        $Result[] = $row;
    }
}

$Result["setTotal"] = count($Result);

echo json_encode($Result, JSON_PRETTY_PRINT);
