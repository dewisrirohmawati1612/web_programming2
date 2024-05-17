<?php
require "calculator.php";
require "mobil/Mobil.php";
require "mobil/Toyota.php";
require "mobil/Honda.php";

use Mobil\Toyota;
use Calculator\Calculator;

$toyota = new Toyota('Mobil', 20);
$calculator = new Calculator($toyota);

echo "Jarak Maksimum " . $toyota->getMerk() . " adalah " . $calculator->hitungjarak();
