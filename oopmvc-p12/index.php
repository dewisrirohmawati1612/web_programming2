<?php
// Susunan file: oopmvc/index.php

// Memanggil model
require_once "model/anggota_model.php";

$anggota = getAnggota();

require "view/anggota/list.php";
?>