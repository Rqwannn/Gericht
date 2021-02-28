<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$id = $_POST["Id"];

$confirm = 0;
$Pay = mysqli_query($conn, "UPDATE pesanan SET proses = '$confirm' WHERE id = '$id'");

$Result = [];

$Result["Id"] = $id;

echo json_encode($Result, JSON_PRETTY_PRINT);

return mysqli_affected_rows($conn);
