<?php

/*
* @name        DARKLYY DaData
* @link        https://darklyy.ru/
* @copyright   Copyright (C) 2012-2022 ООО «ПРИС»
* @license     LICENSE.txt (see attached file)
* @version     VERSION.txt (see attached file)
* @author      Komarov Ivan
*/

namespace Darkeum\DaData;

use Darkeum\DarklyyPackageTools\Package;
use Darkeum\DarklyyPackageTools\PackageServiceProvider;

class DaDataServiceProvider extends PackageServiceProvider
{
    /**
     * Конфигурирование пакета
     *
     * @param  Package $package
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->name('darklyy-dadata')
            ->hasConfigFile();
    }

    /**
     * Регистрация пакета
     *
     * @return void
     */
    public function registeringPackage(): void
    {
        $this->app->singleton('da_data_address', function () {
            return new DaDataAddress();
        });
        $this->app->singleton('da_data_name', function () {
            return new DaDataName();
        });
        $this->app->singleton('da_data_email', function () {
            return new DaDataEmail();
        });
        $this->app->singleton('da_data_phone', function () {
            return new DaDataPhone();
        });
        $this->app->singleton('da_data_company', function () {
            return new DaDataCompany();
        });
        $this->app->singleton('da_data_bank', function () {
            return new DaDataBank();
        });
        $this->app->singleton('da_data_passport', function () {
            return new DaDataPassport();
        });

        $this->app->alias('da_data_address', DaDataAddress::class);
        $this->app->alias('da_data_name', DaDataName::class);
        $this->app->alias('da_data_email', DaDataEmail::class);
        $this->app->alias('da_data_phone', DaDataPhone::class);
        $this->app->alias('da_data_company', DaDataCompany::class);
        $this->app->alias('da_data_bank', DaDataCompany::class);
        $this->app->alias('da_data_passport', DaDataPassport::class);
    }
}
