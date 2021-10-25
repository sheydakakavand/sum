<?php

namespace First\Sum;

use Illuminate\Support\Facades\Facade;

class SumFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sum';
    }
}
