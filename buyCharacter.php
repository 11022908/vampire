<?php

require "settingconnection.php";

$userId = $_POST["userId"];
$characterId = $_POST["characterId"];
// $userId = 4;
// $characterId = 3;
$sql = "SELECT coin FROM user where id = '" . $userId . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $coin = $result->fetch_assoc()["coin"]; //get coin user

    $sql2 = "SELECT price FROM characters where id = '" . $characterId . "'";
    $result2 = $conn->query($sql2);
    if ($result2) {
        $price = $result2->fetch_assoc()["price"];
        if ($price <= $coin) {
            //if buy successfully update coin user
            $sql3 = "UPDATE `user` SET `coin` = coin -  '" . $price . "' WHERE `id` = '" . $userId . "'";
            $sql4 = "INSERT INTO usercharacters (userid, characterid) VALUES ('" . $userId . "', '" . $characterId . "');";
            $conn->query($sql3);
            $conn->query($sql4);
            echo "Buy success";
        } else {
            echo "Not enough coin";
        }
    } else {
        echo "Error not define";
    }
} else {
    echo "0 results";
}

$conn->close();
