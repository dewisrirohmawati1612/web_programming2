<?php
// Susunan file: oopmvc/index.php

$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

$uri0 = isset($uri[0]) ? $uri[0] : null;
$uri1 = isset($uri[1]) ? $uri[1] : null;

require_once "lib/Database.php";
require_once "model/anggota_model.php";
require_once "controller/anggota.php";

$db = new Database();
$model = new Anggota_model($db);
$controller = new Anggota($model);

if ($uri0 && $uri1 && $uri0 === 'anggota' && $uri1 === 'detail') {
    $id = $_GET['id'];
    $controller->detail($id);
} elseif ($uri0 && $uri1 && $uri0 === 'anggota' && $uri1 === 'edit') {
    $id = $_GET['id'];
    $controller->edit($id);
} elseif ($uri0 && $uri1 && $uri0 === 'anggota' && $uri1 === 'delete') {
    $id = $_GET['id'];
    $controller->delete($id);
} elseif ($uri0 && $uri1 && $uri0 === 'anggota' && $uri1 === 'create') {
    $controller->create();
} elseif ($uri0 === 'anggota') {
    $controller->index();
} else {
    header("HTTP/1.1 404 Not Found");
    echo "<html><body><h1>Page not found</h1></body></html>";
}
?>
