<?php 

function getPDO(){
    try{
        return new PDO("mysql:dbname=ppe1820; host=localhost;charset=utf8", "root", "");
    }catch(PDOException $e){
        die("erreur");
    }
}

function getAllBorne(){
    $statement = getPDO()->prepare('SELECT * FROM bornes');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getPhoto($code){
    $req = "SELECT p.id, p.url
            FROM reservations as r 
            INNER JOIN photos as p on p.id_reservation = r.id
            WHERE r.code_evenement = '{$code}'";
    $statement = getPDO()->prepare($req);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);

}