<?php 
require_once 'database.php';
header("Content-Type: application/json");

// $bornes = getAllBorne();
$bornes = getPhoto($_GET['code']);
$json = json_encode($bornes);
echo $json;