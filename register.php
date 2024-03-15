<?php

require "settingconnection.php";
$username = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT password FROM user WHERE username = '" . $username . "'";
$result = $conn->query($sql);
if ($result) {
    if ($result->num_rows > 0) {
        echo "User name is exists, login now";
    } else {
        $sql2 = "INSERT INTO user (username, password, coin) VALUES ('" . $username . "', '" . $password . "', 0);";

        $result2 = $conn->query($sql2);
        if ($result2) {

            echo "Create account successfully";
            $newUserID = $conn->insert_id;
            $sql3 = "INSERT INTO usercharacters (userid, characterid) VALUES ('" . $newUserID . "', 1);";
            $sql4 = "INSERT INTO usermaps (userid, mapid) VALUES ('" . $newUserID . "', 1);";
            $result3 = $conn->query($sql3);
            $result4 = $conn->query($sql4);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
