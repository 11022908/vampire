<?php

require "settingconnection.php";
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT password, id FROM user WHERE username = '" . $username . "'";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] === $password) {
                echo $row["id"];
            } else {
                echo "Incorrect password" .$conn->error;
            }
        }
    } else {
        echo "Username does not exist";
    }
} else {
    echo "Error in query: " . $conn->error;
}
$conn->close();
