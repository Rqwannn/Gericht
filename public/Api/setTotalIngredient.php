<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$arrayMakanan = ["Roasted Duck Colvert", "Roasted Scallop", "Scottish Langoustine", "Veal Sweetbread", "Duck Foie Gras", "Linguine Alle Vongole", "Chicken Saltimbocca", "Shrimp Fra Diavolo", "Bouillabasse", "Fettuccine Alfredo"];
$arrayMinuman = ["Cocktail", "Negroni", "Macchiato", "Spritz", "Punch", "Caffe Freddo"];
$arrayDessert = ["Roasted Figs", "Panna Cotta", "Rote Grütze", "Semifreddo", "La Madeline au Truffle", "Prinsesstårta"];

$NamaFood = $_POST["NamaFood"];
$NamaDrink = $_POST["NamaDrink"];
$NamaDessert = $_POST["NamaDessert"];

$TotalFood = $_POST["TotalFood"];
$TotalDrink = $_POST["TotalDrink"];
$TotalDessert = $_POST["TotalDessert"];

$tersediaFood = 0;
$tersediaDrink = 0;
$tersediaDessert = 0;

$Makanan = 0;
$Minuman = 0;
$Cemilan = 0;

for ($index = 0; $index < 3; $index++) {

    if (in_array($NamaFood, $arrayMakanan) && $Makanan == 0) {
        $Food = mysqli_query($conn, "SELECT tersedia FROM makanan WHERE nama = '$NamaFood'");
        $getTotal = mysqli_fetch_assoc($Food);
        $tersediaFood = $getTotal["tersedia"];

        $Makanan = 1;

        continue;
    } else if (in_array($NamaDrink, $arrayMinuman) && $Minuman == 0) {
        $Drink = mysqli_query($conn, "SELECT tersedia FROM minuman WHERE nama = '$NamaDrink'");
        $getTotal = mysqli_fetch_assoc($Drink);
        $tersediaDrink = $getTotal["tersedia"];

        $Minuman = 1;

        continue;
    } else if (in_array($NamaDessert, $arrayDessert) && $Cemilan == 0) {
        $Dessert = mysqli_query($conn, "SELECT tersedia FROM dessert WHERE nama = '$NamaDessert'");
        $getTotal = mysqli_fetch_assoc($Dessert);
        $tersediaDessert = $getTotal["tersedia"];

        $Cemilan = 1;

        continue;
    }
}

$Result = [];

$Result["TersediaFood"] = $tersediaFood;
$Result["TersediaDrink"] = $tersediaDrink;
$Result["TersediaDessert"] = $tersediaDessert;

echo json_encode($Result, JSON_PRETTY_PRINT);
