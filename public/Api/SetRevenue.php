<?php

$conn = mysqli_connect("localhost", "root", "", "gericht");

$query = mysqli_query($conn, "SELECT total FROM pesanan");

$setArray = [];

while ($row = mysqli_fetch_assoc($query)) {
    $setArray[] = $row;
}

$setRevenue = 0;

for ($index = 0; $index < count($setArray); $index++) {
    $getValue = intval($setArray[$index]["total"]);
    $setRevenue += intval($getValue);
}

$Result = [];

$Result["Revenue"] = $setRevenue;

echo json_encode($Result, JSON_PRETTY_PRINT);
