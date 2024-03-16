<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "vampire";
$conn = new mysqli($hostName, $userName, $password, $dbName);
if (!$conn) {
    echo "not connected";
}

