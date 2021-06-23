<?php

namespace Heavymind\Oxatis\ApiClient\Services\OptionValuesServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class OptionValuesServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('OptionValuesGet', Type\OptionValuesGet::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('OptionValuesEntity', Type\OptionValuesEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('OptionValuesGetResponse', Type\OptionValuesGetResponse::class),
            new ClassMap('SoapDataResultServiceOfOptionValuesDataOptionValuesEntity', Type\SoapDataResultServiceOfOptionValuesDataOptionValuesEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OptionValuesData', Type\OptionValuesData::class),
        ]);
    }


}

