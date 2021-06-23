<?php

namespace Heavymind\Oxatis\ApiClient\Services\OptionTypesServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class OptionTypesServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('OptionTypesGet', Type\OptionTypesGet::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('OptionTypesEntity', Type\OptionTypesEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('OptionTypesGetResponse', Type\OptionTypesGetResponse::class),
            new ClassMap('SoapDataResultServiceOfOptionTypesDataOptionTypesEntity', Type\SoapDataResultServiceOfOptionTypesDataOptionTypesEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OptionTypesData', Type\OptionTypesData::class),
            new ClassMap('OptionTypesGetDetail', Type\OptionTypesGetDetail::class),
            new ClassMap('OptionTypesGetDetailResponse', Type\OptionTypesGetDetailResponse::class),
            new ClassMap('SoapDataResultServiceOfOptionTypeDetailDataOptionTypeDetailEntity', Type\SoapDataResultServiceOfOptionTypeDetailDataOptionTypeDetailEntity::class),
            new ClassMap('OptionTypeDetailData', Type\OptionTypeDetailData::class),
            new ClassMap('OptionTypeDetailEntity', Type\OptionTypeDetailEntity::class),
            new ClassMap('ArrayOfOptionValueDetailEntity', Type\ArrayOfOptionValueDetailEntity::class),
            new ClassMap('OptionValueDetailEntity', Type\OptionValueDetailEntity::class),
            new ClassMap('OptionTypesGetList', Type\OptionTypesGetList::class),
            new ClassMap('OptionTypesGetListResponse', Type\OptionTypesGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfOptionTypeListDataOptionTypeListEntity', Type\SoapDataResultServiceOfOptionTypeListDataOptionTypeListEntity::class),
            new ClassMap('OptionTypeListData', Type\OptionTypeListData::class),
            new ClassMap('OptionTypeListEntity', Type\OptionTypeListEntity::class),
            new ClassMap('ArrayOfOxatisEntity', Type\ArrayOfOxatisEntity::class),
        ]);
    }


}

