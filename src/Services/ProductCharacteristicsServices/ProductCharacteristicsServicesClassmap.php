<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductCharacteristicsServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ProductCharacteristicsServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ProductCharacteristicsUpdate', Type\ProductCharacteristicsUpdate::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('CharacteristicsEntity', Type\CharacteristicsEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('CharacteristicEntity', Type\CharacteristicEntity::class),
            new ClassMap('ArrayOfString', Type\ArrayOfString::class),
            new ClassMap('ProductCharacteristicsUpdateResponse', Type\ProductCharacteristicsUpdateResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('ProductCharacteristicsBatchUpdate', Type\ProductCharacteristicsBatchUpdate::class),
            new ClassMap('CharacteristicsBatchEntity', Type\CharacteristicsBatchEntity::class),
            new ClassMap('ArrayOfCharacteristicsEntity', Type\ArrayOfCharacteristicsEntity::class),
            new ClassMap('ProductCharacteristicsBatchUpdateResponse', Type\ProductCharacteristicsBatchUpdateResponse::class),
            new ClassMap('SoapDataResultServiceOfProductIdListDataProductIdListEntity', Type\SoapDataResultServiceOfProductIdListDataProductIdListEntity::class),
            new ClassMap('ProductIdListData', Type\ProductIdListData::class),
            new ClassMap('ProductIdListEntity', Type\ProductIdListEntity::class),
            new ClassMap('ArrayOfProductIdEntity', Type\ArrayOfProductIdEntity::class),
            new ClassMap('ProductIdEntity', Type\ProductIdEntity::class),
            new ClassMap('OptionValuesEntity', Type\OptionValuesEntity::class),
            new ClassMap('OptionTypesEntity', Type\OptionTypesEntity::class),
            new ClassMap('ProductBaseEntity', Type\ProductBaseEntity::class),
            new ClassMap('PriceVATModeEntity', Type\PriceVATModeEntity::class),
            new ClassMap('CategoryEntity', Type\CategoryEntity::class),
            new ClassMap('BrandEntity', Type\BrandEntity::class),
            new ClassMap('DiscountRuleIdEntity', Type\DiscountRuleIdEntity::class),
            new ClassMap('ArrayOfImagesListIdEntity', Type\ArrayOfImagesListIdEntity::class),
            new ClassMap('ImagesListIdEntity', Type\ImagesListIdEntity::class),
            new ClassMap('ArrayOfTaxAmountEntity', Type\ArrayOfTaxAmountEntity::class),
            new ClassMap('TaxAmountEntity', Type\TaxAmountEntity::class),
            new ClassMap('TaxClassEntity', Type\TaxClassEntity::class),
            new ClassMap('ProductEntity', Type\ProductEntity::class),
            new ClassMap('QuantityEntity', Type\QuantityEntity::class),
            new ClassMap('ProductCharacteristicsGet', Type\ProductCharacteristicsGet::class),
            new ClassMap('ProductCharacteristicsGetResponse', Type\ProductCharacteristicsGetResponse::class),
            new ClassMap('SoapDataResultServiceOfCharacteristicsIdDataCharacteristicsIdEntity', Type\SoapDataResultServiceOfCharacteristicsIdDataCharacteristicsIdEntity::class),
            new ClassMap('CharacteristicsIdData', Type\CharacteristicsIdData::class),
            new ClassMap('CharacteristicsIdEntity', Type\CharacteristicsIdEntity::class),
            new ClassMap('CharacteristicIdEntity', Type\CharacteristicIdEntity::class),
        ]);
    }


}

