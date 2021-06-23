<?php

namespace Heavymind\Oxatis\ApiClient\Services\SalesRepServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class SalesRepServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('SalesRepAdd', Type\SalesRepAdd::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('SalesRepEntity', Type\SalesRepEntity::class),
            new ClassMap('SalesRepIdEntity', Type\SalesRepIdEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('SalesRepAddResponse', Type\SalesRepAddResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('SalesRepDelete', Type\SalesRepDelete::class),
            new ClassMap('SalesRepDeleteResponse', Type\SalesRepDeleteResponse::class),
            new ClassMap('SalesRepGet', Type\SalesRepGet::class),
            new ClassMap('SalesRepGetResponse', Type\SalesRepGetResponse::class),
            new ClassMap('SoapDataResultServiceOfSalesRepDataSalesRepEntity', Type\SoapDataResultServiceOfSalesRepDataSalesRepEntity::class),
            new ClassMap('SalesRepData', Type\SalesRepData::class),
            new ClassMap('SalesRepGetList', Type\SalesRepGetList::class),
            new ClassMap('SalesRepGetListResponse', Type\SalesRepGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfSalesRepListDataSalesRepListEntity', Type\SoapDataResultServiceOfSalesRepListDataSalesRepListEntity::class),
            new ClassMap('SalesRepListData', Type\SalesRepListData::class),
            new ClassMap('SalesRepListEntity', Type\SalesRepListEntity::class),
            new ClassMap('ArrayOfSalesRepIdEntity', Type\ArrayOfSalesRepIdEntity::class),
            new ClassMap('SalesRepImport', Type\SalesRepImport::class),
            new ClassMap('SalesRepImportResponse', Type\SalesRepImportResponse::class),
            new ClassMap('SalesRepUpdate', Type\SalesRepUpdate::class),
            new ClassMap('SalesRepUpdateResponse', Type\SalesRepUpdateResponse::class),
        ]);
    }


}

