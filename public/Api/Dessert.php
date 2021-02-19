<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");
$URL = mysqli_query($conn, "SELECT * FROM dessert");
$Result = [];

while ($row = mysqli_fetch_assoc($URL)) {
    $Result[] = $row;
}

echo json_encode($Result, JSON_PRETTY_PRINT);
