<?php
require_once "model/model_anggota.php";

$anggota = getAnggota();

require "view/anggota/list.php";