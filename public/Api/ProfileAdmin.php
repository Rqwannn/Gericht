<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$Address = $_POST["Address"];
$City = $_POST["City"];
$Country = $_POST["Country"];
$PostalCode = $_POST["PostalCode"];

if ($Password == "") {
    mysqli_query($conn, "UPDATE admin SET name = '$Name', email = '$Email', alamat = '$Address', kota = '$City', negara = '$Country', postal_code = '$PostalCode', update_at = null WHERE email = '$Email' ");
} else {
    $Password = md5($_POST["Password"]);
    mysqli_query($conn, "UPDATE admin SET name = '$Name', email = '$Email', password = '$Password', alamat = '$Address', kota = '$City', negara = '$Country', postal_code = '$PostalCode', update_at = null WHERE email = '$Email' ");
}

$Result = [];

$Result["Name"] = $Name;

echo json_encode($Result, JSON_PRETTY_PRINT);
