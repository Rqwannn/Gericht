<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$Id = $_POST["id"];

$query = mysqli_query($conn, "DELETE FROM user WHERE id = '$Id'");

$Result = [];
$Result["Id"] = $Id;

echo json_encode($Result, JSON_PRETTY_PRINT);
return mysqli_affected_rows($conn);
