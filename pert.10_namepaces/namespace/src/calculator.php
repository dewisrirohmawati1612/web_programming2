<?php
namespace Calculator;
class Calculator {
    
    protected $mobil;

    function __construct($mobil){
        $this->mobil=$mobil;
    }

    function hitungjarak(){
        $bbm = $this->mobil->getbbm();
        $efisiensi = $this->mobil->getEfisiensi();
        $jarakMax = $bbm * $efisiensi;

        return $jarakMax;
    }
}