<?php
namespace App\Extensions;

use Illuminate\Support\Facades\Facade;

class OperationFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return new Operation();
    }
}
