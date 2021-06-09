<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$getFood = mysqli_query($conn, "SELECT nama FROM makanan");
$getDrink = mysqli_query($conn, "SELECT nama FROM minuman");
$getDessert = mysqli_query($conn, "SELECT nama FROM dessert");

$WrapperFood = [];
$WrapperDrink = [];
$WrapperDessert = [];

foreach ($getFood as $item) {
    $WrapperFood[] = $item['nama'];
}

foreach ($getDrink as $item) {
    $WrapperDrink[] = $item['nama'];
}

foreach ($getDessert as $item) {
    $WrapperDessert[] = $item['nama'];
}

$NamaPesanan = $_POST["nama"];
$JmlPesanan = $_POST["jml"];

$PisahNama = explode(",", $NamaPesanan);
$PisahJml = explode(",", $JmlPesanan);

for ($index = 0; $index < count($PisahNama) - 1; $index++) {

    if (in_array($PisahNama[$index], $WrapperFood)) {
        $getJml = $PisahJml[$index];
        $getName = $PisahNama[$index];
        $validData = mysqli_query($conn, "SELECT * FROM makanan WHERE tersedia < '$getJml' AND nama = '$getName'");
        if (mysqli_num_rows($validData)) {
            $NamaMenu = mysqli_fetch_assoc($validData)['nama'];
            $data = [
                'status' => false,
                'massage' => "For the $NamaMenu order, the portion you ordered is not sufficient, please order it tomorrow"
            ];
            echo json_encode($data);
            die;
        }
    } else if (in_array($PisahNama[$index], $WrapperDrink)) {
        $getJml = $PisahJml[$index];
        $getName = $PisahNama[$index];
        $validData = mysqli_query($conn, "SELECT * FROM minuman WHERE tersedia < '$getJml' AND WHERE nama = '$getName'");
        if (mysqli_num_rows($validData)) {
            $NamaMenu = mysqli_fetch_assoc($validData)['nama'];
            $data = [
                'status' => false,
                'massage' => "For the $NamaMenu order, the portion you ordered is not sufficient, please order it tomorrow"
            ];
            echo json_encode($data);
            die;
        }
    } else if (in_array($PisahNama[$index], $WrapperDessert)) {
        $getJml = $PisahJml[$index];
        $getName = $PisahNama[$index];
        $validData = mysqli_query($conn, "SELECT * FROM dessert WHERE tersedia < '$getJml' AND WHERE nama = '$getName'");
        if (mysqli_num_rows($validData)) {
            $NamaMenu = mysqli_fetch_assoc($validData)['nama'];
            $data = [
                'status' => false,
                'massage' => "For the $NamaMenu order, the portion you ordered is not sufficient, please order it tomorrow"
            ];
            echo json_encode($data);
            die;
        }
    }
}

$arrayMakanan = [];
$arrayMinuman = [];
$arrayDessert = [];

$Makanan = mysqli_query($conn, 'SELECT * FROM makanan');
$Minuman = mysqli_query($conn, 'SELECT * FROM minuman');
$Dessert = mysqli_query($conn, 'SELECT * FROM dessert');

while ($result = mysqli_fetch_assoc($Makanan)) {
    $arrayMakanan[] = $result['nama'];
}

while ($result = mysqli_fetch_assoc($Minuman)) {
    $arrayMinuman[] = $result['nama'];
}

while ($result = mysqli_fetch_assoc($Dessert)) {
    $arrayDessert[] = $result['nama'];
}

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
