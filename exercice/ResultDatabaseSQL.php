<?php
try {

    $mysqli = new mysqli("localhost", "root", "", "choptaphoto");
    // $statement = $mysqli->prepare("SELECT id, name, description FROM product");
    $result = $mysqli->query("SELECT * FROM product");
    $dbdata = array();

    while ($row = $result->fetch_assoc()) {
        $dbdata[] = $row;
    }
    echo json_encode($dbdata);
} catch (mysqli_sql_exception $e) {
    echo "MySQLi Error Code: " . $e->getCode() . "<br />";
    echo "Exception Msg: " . $e->getMessage();
    exit();
}

$mysqli->close();
