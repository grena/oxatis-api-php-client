<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ProductAttributesServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ProductAttributesUpdate', Type\ProductAttributesUpdate::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('ProductAttributesEntity', Type\ProductAttributesEntity::class),
            new ClassMap('ProductIdEntity', Type\ProductIdEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('TaxClassEntity', Type\TaxClassEntity::class),
            new ClassMap('TaxAmountEntity', Type\TaxAmountEntity::class),
            new ClassMap('ImagesListIdEntity', Type\ImagesListIdEntity::class),
            new ClassMap('DiscountRuleIdEntity', Type\DiscountRuleIdEntity::class),
            new ClassMap('BrandEntity', Type\BrandEntity::class),
            new ClassMap('CategoryEntity', Type\CategoryEntity::class),
            new ClassMap('OptionTypesEntity', Type\OptionTypesEntity::class),
            new ClassMap('OptionValuesEntity', Type\OptionValuesEntity::class),
            new ClassMap('ProductBaseEntity', Type\ProductBaseEntity::class),
            new ClassMap('PriceVATModeEntity', Type\PriceVATModeEntity::class),
            new ClassMap('ArrayOfImagesListIdEntity', Type\ArrayOfImagesListIdEntity::class),
            new ClassMap('ArrayOfTaxAmountEntity', Type\ArrayOfTaxAmountEntity::class),
            new ClassMap('ProductEntity', Type\ProductEntity::class),
            new ClassMap('QuantityEntity', Type\QuantityEntity::class),
            new ClassMap('ProductAttributeTextEntity', Type\ProductAttributeTextEntity::class),
            new ClassMap('ProductMultipleAttributeEntity', Type\ProductMultipleAttributeEntity::class),
            new ClassMap('ArrayOfAttribute', Type\ArrayOfAttribute::class),
            new ClassMap('Attribute', Type\Attribute::class),
            new ClassMap('ProductAttributesUpdateResponse', Type\ProductAttributesUpdateResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
        ]);
    }


}

