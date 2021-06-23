<?php

namespace Heavymind\Oxatis\ApiClient\Services\TaxRateServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class TaxRateServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('TaxRateGetList', Type\TaxRateGetList::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('TaxRateGetListResponse', Type\TaxRateGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfTaxRateListDataTaxRateListEntity', Type\SoapDataResultServiceOfTaxRateListDataTaxRateListEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('TaxRateListData', Type\TaxRateListData::class),
            new ClassMap('TaxRateListEntity', Type\TaxRateListEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('TaxRateEntity', Type\TaxRateEntity::class),
            new ClassMap('ArrayOfTaxRateEntity', Type\ArrayOfTaxRateEntity::class),
        ]);
    }


}

