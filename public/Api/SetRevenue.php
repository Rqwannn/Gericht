<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$query = mysqli_query($conn, "SELECT * FROM pesanan");

$setArray = [];

while ($row = mysqli_fetch_assoc($query)) {
    $setArray[] = $row;
}

$setRevenue = 0;
$setLastMont = 0;

for ($index = 0; $index < count($setArray); $index++) {
    $BulanSekarang = date('m');
    $pisahBulan = explode(" ", $setArray[$index]['tanggal_pesan']);
    $PisahLagi = explode("-", $pisahBulan[0]);
    if ($BulanSekarang == $PisahLagi[1] && $setArray[$index]["konfirmasi"] == 1) {
        $getValue = intval($setArray[$index]["total"]);
        $setRevenue += intval($getValue);
    } else if (($BulanSekarang - 01) == $PisahLagi[1] && $setArray[$index]["konfirmasi"] == 1) {
        $getValue = intval($setArray[$index]["total"]);
        $setLastMont += intval($getValue);
    }
}

$HitungPersen = round((100 * $setRevenue) / $setLastMont);

$Result = [];

$Result["Revenue"] = $setRevenue;
$Result["Persen"] = $HitungPersen;

echo json_encode($Result, JSON_PRETTY_PRINT);
