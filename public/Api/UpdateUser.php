<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$Id = $_POST["Id"];
$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$Status = $_POST["Status"];
$BtnProfile = $_POST["BtnProfile"];

if ($Password != "") {
    mysqli_query($conn, "UPDATE user SET name = '$Name', email = '$Email', password = '$Password', status = '$Status' WHERE id = '$Id'");
} else {
    mysqli_query($conn, "UPDATE user SET name = '$Name', email = '$Email', status = '$Status' WHERE id = '$Id'");
}

$Result = [];
$Result["BtnProfile"] = $BtnProfile;


echo json_encode($Result, JSON_PRETTY_PRINT);
return mysqli_affected_rows($conn);
