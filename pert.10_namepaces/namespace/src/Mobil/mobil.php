<?php
namespace Mobil;

abstract class Mobil {
    protected $merk = '';
    protected $bbm = '';

    function __construct(string $merk, int $bbm)
    {
        $this->merk = $merk;
        $this->bbm = $bbm;
    }

    function getMerk() {
        return $this->merk;
    }

    function getBbm(): int {
        return $this->bbm;
    }

    abstract public function getEfisiensi();
}
