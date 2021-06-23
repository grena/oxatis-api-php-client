<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductWebBlockServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ProductWebBlockServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ProductWebBlockUpdate', Type\ProductWebBlockUpdate::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('ProductWebBlockEntity', Type\ProductWebBlockEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('ProductWebBlockUpdateResponse', Type\ProductWebBlockUpdateResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
        ]);
    }


}

