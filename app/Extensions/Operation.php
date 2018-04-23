<?php
namespace App\Extensions;

// this class will be called from facade
class Operation
{
    public function add ($a, $b){
        return $a + $b;
    }

    public function subtract ($a, $b) {
        return $a - $b;
    }
}
