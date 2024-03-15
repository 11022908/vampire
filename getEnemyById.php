<?php

require "settingconnection.php";

$enemyId = $_POST["enemyId"]; //bắt buộc phải trùng với field trong form



$sql = "SELECT hp, speed FROM enemy Where id = '" . $enemyId . "'";
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
