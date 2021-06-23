<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductBundleServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ProductBundleServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ProductGetBundledItems', Type\ProductGetBundledItems::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('ProductKeyEntity', Type\ProductKeyEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('ProductBundledItemEntity', Type\ProductBundledItemEntity::class),
            new ClassMap('ProductBundleEntity', Type\ProductBundleEntity::class),
            new ClassMap('ArrayOfProductBundledItemEntity', Type\ArrayOfProductBundledItemEntity::class),
            new ClassMap('ProductGetBundledItemsResponse', Type\ProductGetBundledItemsResponse::class),
            new ClassMap('SoapDataResultServiceOfProductBundleDataProductBundleEntity', Type\SoapDataResultServiceOfProductBundleDataProductBundleEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('ProductBundleData', Type\ProductBundleData::class),
            new ClassMap('ProductUpdateBundledItems', Type\ProductUpdateBundledItems::class),
            new ClassMap('BundleEntity', Type\BundleEntity::class),
            new ClassMap('BundledItemEntity', Type\BundledItemEntity::class),
            new ClassMap('BundledItemBaseEntity', Type\BundledItemBaseEntity::class),
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
            new ClassMap('ProductUpdateBundledItemsResponse', Type\ProductUpdateBundledItemsResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
        ]);
    }


}

