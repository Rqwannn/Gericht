<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$arrayMakanan = ["Roasted Duck Colvert", "Roasted Scallop", "Scottish Langoustine", "Veal Sweetbread", "Duck Foie Gras", "Linguine Alle Vongole", "Chicken Saltimbocca", "Shrimp Fra Diavolo", "Bouillabasse", "Fettuccine Alfredo"];
$arrayMinuman = ["Cocktail", "Negroni", "Macchiato", "Spritz", "Punch", "Caffe Freddo"];
$arrayDessert = ["Roasted Figs", "Panna Cotta", "Rote Grütze", "Semifreddo", "La Madeline au Truffle", "Prinsesstårta"];

$id = $_POST["Id"];
$query = mysqli_query($conn, "SELECT * FROM pesanan WHERE id = '$id'");
$result = mysqli_fetch_assoc($query);

// Update

$confirm = 1;
$Pay = mysqli_query($conn, "UPDATE pesanan SET proses = '$confirm', konfirmasi = '$confirm' WHERE id = '$id'");

// Overload

$Nama_Pesanan = $result["nama_orderan"];
$Jumlah_Pesanan = $result["jml_orderan"];

$pecahNama = explode(",", $Nama_Pesanan);
$pecahJumlah = explode(",", $Jumlah_Pesanan);

for ($index = 0; $index < count($pecahNama); $index++) {

    $getNama = $pecahNama[$index];
    $getJumlah = $pecahJumlah[$index];

    if (in_array($getNama, $arrayMakanan)) {
        mysqli_query($conn, "UPDATE makanan set tersedia = tersedia - '$getJumlah' WHERE nama = '$getNama'");
        continue;
    } else if (in_array($getNama, $arrayMinuman)) {
        mysqli_query($conn, "UPDATE minuman set tersedia = tersedia - '$getJumlah' WHERE nama = '$getNama'");
        continue;
    } else if (in_array($getNama, $arrayDessert)) {
        mysqli_query($conn, "UPDATE dessert set tersedia = tersedia - '$getJumlah' WHERE nama = '$getNama'");
        continue;
    }
}

$Result = [];

$Result["Id"] = $id;

echo json_encode($Result, JSON_PRETTY_PRINT);

return mysqli_affected_rows($conn);
