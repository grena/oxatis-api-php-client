<?php

namespace Heavymind\Oxatis\ApiClient\Services\ShippingTypeServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ShippingTypeServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ShippingTypeGet', Type\ShippingTypeGet::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('ShippingTypeIdEntity', Type\ShippingTypeIdEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('CategoryEntity', Type\CategoryEntity::class),
            new ClassMap('TaxClassEntity', Type\TaxClassEntity::class),
            new ClassMap('ShippingTypeEntity', Type\ShippingTypeEntity::class),
            new ClassMap('ArrayOfCountryEntity', Type\ArrayOfCountryEntity::class),
            new ClassMap('CountryEntity', Type\CountryEntity::class),
            new ClassMap('ShippingTypeGetResponse', Type\ShippingTypeGetResponse::class),
            new ClassMap('SoapDataResultServiceOfShippingTypeDataShippingTypeEntity', Type\SoapDataResultServiceOfShippingTypeDataShippingTypeEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('ShippingTypeData', Type\ShippingTypeData::class),
            new ClassMap('ShippingTypeAdd', Type\ShippingTypeAdd::class),
            new ClassMap('ShippingTypeAddResponse', Type\ShippingTypeAddResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('ShippingTypeImport', Type\ShippingTypeImport::class),
            new ClassMap('ShippingTypeImportResponse', Type\ShippingTypeImportResponse::class),
            new ClassMap('ShippingTypeUpdate', Type\ShippingTypeUpdate::class),
            new ClassMap('ShippingTypeUpdateResponse', Type\ShippingTypeUpdateResponse::class),
            new ClassMap('ShippingTypeDelete', Type\ShippingTypeDelete::class),
            new ClassMap('ShippingTypeDeleteResponse', Type\ShippingTypeDeleteResponse::class),
            new ClassMap('ShippingTypeGetList', Type\ShippingTypeGetList::class),
            new ClassMap('ShippingTypeGetListResponse', Type\ShippingTypeGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfShippingTypeListDataShippingTypeListEntity', Type\SoapDataResultServiceOfShippingTypeListDataShippingTypeListEntity::class),
            new ClassMap('ShippingTypeListData', Type\ShippingTypeListData::class),
            new ClassMap('ShippingTypeListEntity', Type\ShippingTypeListEntity::class),
            new ClassMap('ArrayOfShippingTypeEntity', Type\ArrayOfShippingTypeEntity::class),
        ]);
    }


}

