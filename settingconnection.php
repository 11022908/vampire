<?php
$hostName = "sql107.infinityfree.com";
$userName = "if0_36160319";
$password = "jFL3dJeh6lZl05";
$dbName = "if0_36160319_vampire";
$conn = new mysqli($hostName, $userName, $password, $dbName);
if (!$conn) {
    echo "not connected";
}
else echo "conneted";
