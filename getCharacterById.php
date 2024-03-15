<?php

require "settingconnection.php";

$characterId = $_POST["characterId"];


$sql = "SELECT name, hp, speed, description,price FROM characters Where id = '" . $characterId . "'";
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
