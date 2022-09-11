<?php

namespace Darkeum\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataEmail
 * @package Darkeum\DaData\Facades
 * @method \Darkeum\DaData\DaDataEmail standardization(string $email)
 * @method \Darkeum\DaData\DaDataEmail prompt(string $email, int $count)
 */
class DaDataEmail extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_email';
    }

}
