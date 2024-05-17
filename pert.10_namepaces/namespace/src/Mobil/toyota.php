<?php
namespace Mobil;

class Toyota extends Mobil{
   protected $efisiensi = 10;

   function getEfisiensi()
   {
    return $this->efisiensi;
   }   
}
