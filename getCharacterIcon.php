<?php
require "settingconnection.php";

$characterId = $_POST["characterId"];


$path = "http://localhost/vampire/ImageCollections/characters/" . $characterId . ".png";

$image = file_get_contents($path);
echo $image;

$conn->close();
