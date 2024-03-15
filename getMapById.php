<?php

require "settingconnection.php";

$mapId = $_POST["mapId"]; //bắt buộc phải trùng với field trong form


$sql = "SELECT name, description, price FROM maps Where id = '" . $mapId . "'";
$result = $conn->query($sql);
if ($result) {
    $rows = array();
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
} else {
    echo "0 results";
}

$conn->close();
