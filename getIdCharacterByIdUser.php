<?php

require "settingconnection.php";

$userId = $_POST["userId"];

$sql = "SELECT characterid FROM usercharacters where userid = '" . $userId . "'";
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
