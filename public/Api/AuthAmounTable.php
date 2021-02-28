<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$NamaTabel = $_POST["NamaTabel"];
$getQueryTersedia = mysqli_query($conn, "SELECT * FROM private_table WHERE nama = '$NamaTabel'");
$getTersedia = mysqli_fetch_assoc($getQueryTersedia);

$Result = [];
$Result["tersedia"] = $getTersedia["tersedia"];

echo json_encode($Result, JSON_PRETTY_PRINT);
