<?php

namespace Darkeum\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataPassport
 * @package Darkeum\DaData\Facades
 * @method \Darkeum\DaData\DaDataPassport standardization(string $id)
 * @method \Darkeum\DaData\DaDataPassport fms(string $passport, int $count)
 */
class DaDataPassport extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_passport';
    }

}
