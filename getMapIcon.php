<?php
require "settingconnection.php";

$mapId = $_POST["mapId"];

$path = "http://localhost/vampire/ImageCollections/maps/" . $mapId . ".png";

$image = file_get_contents($path);
echo $image;

$conn->close();
