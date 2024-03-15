<?php
require "settingconnection.php";

$enemyId = $_POST["enemyId"];

$path = "http://localhost/vampire/ImageCollections/enemies/" . $enemyId . ".png";

$image = file_get_contents($path);
echo $image;

$conn->close();
