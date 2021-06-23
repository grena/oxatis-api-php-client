<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProgressStateServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ProgressStateServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ProgressStateGet', Type\ProgressStateGet::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('ProgressStateIdEntity', Type\ProgressStateIdEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('ProgressStateEntity', Type\ProgressStateEntity::class),
            new ClassMap('ProgressStateGetResponse', Type\ProgressStateGetResponse::class),
            new ClassMap('SoapDataResultServiceOfProgressStateDataProgressStateEntity', Type\SoapDataResultServiceOfProgressStateDataProgressStateEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('ProgressStateData', Type\ProgressStateData::class),
            new ClassMap('ProgressStateGetList', Type\ProgressStateGetList::class),
            new ClassMap('ProgressStateGetListResponse', Type\ProgressStateGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfProgressStateListDataProgressStateListEntity', Type\SoapDataResultServiceOfProgressStateListDataProgressStateListEntity::class),
            new ClassMap('ProgressStateListData', Type\ProgressStateListData::class),
            new ClassMap('ProgressStateListEntity', Type\ProgressStateListEntity::class),
            new ClassMap('ArrayOfProgressStateEntity', Type\ArrayOfProgressStateEntity::class),
        ]);
    }


}

