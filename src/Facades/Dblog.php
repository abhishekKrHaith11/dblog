<?php

namespace Abhishekkrhaith11\Dblog\Facades;

use Illuminate\Support\Facades\Facade;

class Dblog extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dblog';
    }
}
