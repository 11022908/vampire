<?php

require "settingconnection.php";

$userId = $_POST["userId"];

// Lấy ra những ID trong bảng characters mà người dùng không có
$sql = "SELECT id FROM characters WHERE id NOT IN (SELECT characterid FROM usercharacters WHERE userid = '" . $userId . "')";

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



