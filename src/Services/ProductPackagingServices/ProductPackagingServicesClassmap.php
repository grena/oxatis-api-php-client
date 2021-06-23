<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductPackagingServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ProductPackagingServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ProductUpdatePackaging', Type\ProductUpdatePackaging::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('ProductPackagingEntity', Type\ProductPackagingEntity::class),
            new ClassMap('ProductPackagingPerPriceEntity', Type\ProductPackagingPerPriceEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('ProductPackagingItemEntity', Type\ProductPackagingItemEntity::class),
            new ClassMap('ProductPackagingItemBaseEntity', Type\ProductPackagingItemBaseEntity::class),
            new ClassMap('ProductUpdatePackagingResponse', Type\ProductUpdatePackagingResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('ProductUpdateUserPricePerPackaging', Type\ProductUpdateUserPricePerPackaging::class),
            new ClassMap('ProductUserPricePerPackagingEntity', Type\ProductUserPricePerPackagingEntity::class),
            new ClassMap('ProductUserIdEntity', Type\ProductUserIdEntity::class),
            new ClassMap('UserIdEntity', Type\UserIdEntity::class),
            new ClassMap('UserEntity', Type\UserEntity::class),
            new ClassMap('CategoryEntity', Type\CategoryEntity::class),
            new ClassMap('TaxClassEntity', Type\TaxClassEntity::class),
            new ClassMap('ArrayOfCatalogAccessValueEntity', Type\ArrayOfCatalogAccessValueEntity::class),
            new ClassMap('CatalogAccessValueEntity', Type\CatalogAccessValueEntity::class),
            new ClassMap('ProductUpdateUserPricePerPackagingResponse', Type\ProductUpdateUserPricePerPackagingResponse::class),
            new ClassMap('ProductUpdatePackagingOptions', Type\ProductUpdatePackagingOptions::class),
            new ClassMap('ProductPackagingOptionsEntity', Type\ProductPackagingOptionsEntity::class),
            new ClassMap('ProductUpdatePackagingOptionsResponse', Type\ProductUpdatePackagingOptionsResponse::class),
            new ClassMap('ProductDeletePackaging', Type\ProductDeletePackaging::class),
            new ClassMap('ProductDeletePackagingResponse', Type\ProductDeletePackagingResponse::class),
            new ClassMap('ProductDeleteUserPackagingPrices', Type\ProductDeleteUserPackagingPrices::class),
            new ClassMap('ProductDeleteUserPackagingPricesResponse', Type\ProductDeleteUserPackagingPricesResponse::class),
        ]);
    }


}

