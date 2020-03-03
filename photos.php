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
for ($i=0; $i < count($bornes); $i++) { 
    $bornes[$i]["url"] = "photos/{$bornes[$i]["id"]}.png";  
}
$json = json_encode($bornes);
echo $json;