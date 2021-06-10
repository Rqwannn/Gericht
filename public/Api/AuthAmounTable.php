<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$Name = $_POST["NamaTable"];
$ValidateTable = mysqli_query($conn, "SELECT * FROM private_table WHERE tersedia < '1' AND nama = '$Name' ");

$Result = [];

if (mysqli_num_rows($ValidateTable)) {
    $Result["status"] = false;
    $Result["massage"] = "Sorry the table you ordered is full";
    echo json_encode($Result);
    die;
}

$Result["status"] = true;
$Result["massage"] = "Tables Available";

echo json_encode($Result);
