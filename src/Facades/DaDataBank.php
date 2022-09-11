<?php

namespace Darkeum\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataBank
 * @package Darkeum\DaData\Facades
 * @method \Darkeum\DaData\DaDataBank id(string $bank)
 * @method \Darkeum\DaData\DaDataBank prompt(string $company, int $coun, array $status, array $type, string $locations, string $locations_boost)
 */
class DaDataBank extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_bank';
    }

}
