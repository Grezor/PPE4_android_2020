<?php 
require_once 'database.php';
header("Content-Type: application/json");

if(isset($_GET['code'])){
    $code = $_GET['code'];
}else{
    http_response_code(400);
    return; 
}



$bornes = getPhoto($_GET['code']);
$json = json_encode($bornes);
echo $json;