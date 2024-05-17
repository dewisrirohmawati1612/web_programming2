<?php
function openDbConnection() {
    $link = new PDO("mysql:host=localhost;dbname=db_oopmvc1", "root", "");
    return $link;
}

function closeDbCoonection($link){
    $link = null;
}

function getAnggota(){
    $link = openDbConnection();
    $result = $link->query("SELECT*from anggota");
    $anggota = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        $anggota[]=$row;
    }
    closeDbCoonection($link);
    return $anggota;
}