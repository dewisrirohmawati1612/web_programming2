<?php 
// susunan file : oopmvc/model/model_anggota.php
function openDbConnection()  { 
    $link = new PDO("mysql:host=localhost;dbname=db_oopmvc", "root", "");
    return $link;
}
function closeDbConnection(&$link) {  
    $link = null;
}
function getAnggota(){
    $link = openDbConnection();
    $result = $link->query("SELECT *from anggota");
    $anggota = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        $anggota[]= $row;
    }
    closeDbConnection($link);
    return $anggota;
}

function getAnggotabyId($id) {
    $link = openDbConnection();

    $query = "SELECT *FROM anggota WHERE Id =:id";
    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $row =$statement->fetch(PDO::FETCH_ASSOC);
    closeDbConnection($link);
    return $row;
}
?>