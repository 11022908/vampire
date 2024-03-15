<?php

require "settingconnection.php";


$sql = "SELECT id FROM characters";
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
