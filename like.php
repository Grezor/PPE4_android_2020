<?php 
require_once './includes/database.php';

$photoId = null;
if(isset($_POST["photo_id"])){
    $photoId = $_POST["photo_id"];
}else{
    http_response_code(400);
    return; 
}
$result = togglelikePhoto($photoId);
if($result === false){
    http_response_code(500);
    return;
}


header("Content-Type: application/json");
// echo json_encode($result)
?>