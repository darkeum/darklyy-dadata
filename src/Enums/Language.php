<?php

namespace Darkeum\DaData\Enums;

/**
 * Class Language
 * @package Darkeum\DaData\Enums
 */
class Language
{

    const RU           = 1;
    const EN           = 2;

    public static $map = [
        self::RU    => 'ru',
        self::EN    => 'en',
    ];

}
