<?php

namespace Heavymind\Oxatis\ApiClient\Services\DiscountRuleServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class DiscountRuleServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('DiscountRuleLinkToProductPriceUpdate', Type\DiscountRuleLinkToProductPriceUpdate::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('DiscountRuleLinkToProductPriceEntity', Type\DiscountRuleLinkToProductPriceEntity::class),
            new ClassMap('ProductPriceIndexEntity', Type\ProductPriceIndexEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('TaxClassEntity', Type\TaxClassEntity::class),
            new ClassMap('TaxAmountEntity', Type\TaxAmountEntity::class),
            new ClassMap('ImagesListIdEntity', Type\ImagesListIdEntity::class),
            new ClassMap('DiscountRuleIdEntity', Type\DiscountRuleIdEntity::class),
            new ClassMap('DiscountRuleEntity', Type\DiscountRuleEntity::class),
            new ClassMap('BrandEntity', Type\BrandEntity::class),
            new ClassMap('CategoryEntity', Type\CategoryEntity::class),
            new ClassMap('OptionTypesEntity', Type\OptionTypesEntity::class),
            new ClassMap('OptionValuesEntity', Type\OptionValuesEntity::class),
            new ClassMap('ProductIdEntity', Type\ProductIdEntity::class),
            new ClassMap('ProductBaseEntity', Type\ProductBaseEntity::class),
            new ClassMap('PriceVATModeEntity', Type\PriceVATModeEntity::class),
            new ClassMap('ArrayOfImagesListIdEntity', Type\ArrayOfImagesListIdEntity::class),
            new ClassMap('ArrayOfTaxAmountEntity', Type\ArrayOfTaxAmountEntity::class),
            new ClassMap('ProductEntity', Type\ProductEntity::class),
            new ClassMap('QuantityEntity', Type\QuantityEntity::class),
            new ClassMap('DiscountRuleLinkToProductPriceUpdateResponse', Type\DiscountRuleLinkToProductPriceUpdateResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('DiscountRuleCustomPriceUpdate', Type\DiscountRuleCustomPriceUpdate::class),
            new ClassMap('DiscountRuleCustomPriceEntity', Type\DiscountRuleCustomPriceEntity::class),
            new ClassMap('UserIdEntity', Type\UserIdEntity::class),
            new ClassMap('UserEntity', Type\UserEntity::class),
            new ClassMap('ArrayOfCatalogAccessValueEntity', Type\ArrayOfCatalogAccessValueEntity::class),
            new ClassMap('CatalogAccessValueEntity', Type\CatalogAccessValueEntity::class),
            new ClassMap('DiscountRuleCustomPriceUpdateResponse', Type\DiscountRuleCustomPriceUpdateResponse::class),
            new ClassMap('DiscountRuleProductFamilyUserUpdate', Type\DiscountRuleProductFamilyUserUpdate::class),
            new ClassMap('DiscountRuleProductFamilyUserEntity', Type\DiscountRuleProductFamilyUserEntity::class),
            new ClassMap('DiscountRuleProductFamilyCustomPriceEntity', Type\DiscountRuleProductFamilyCustomPriceEntity::class),
            new ClassMap('DiscountRuleProductFamilyUserUpdateResponse', Type\DiscountRuleProductFamilyUserUpdateResponse::class),
            new ClassMap('DiscountRuleUpdateComputeMode', Type\DiscountRuleUpdateComputeMode::class),
            new ClassMap('DiscountRuleComputeModeEntity', Type\DiscountRuleComputeModeEntity::class),
            new ClassMap('DiscountRuleUpdateComputeModeResponse', Type\DiscountRuleUpdateComputeModeResponse::class),
            new ClassMap('DiscountRuleDelete', Type\DiscountRuleDelete::class),
            new ClassMap('DiscountRuleDeleteResponse', Type\DiscountRuleDeleteResponse::class),
            new ClassMap('DiscountRuleImportFromStrBytes', Type\DiscountRuleImportFromStrBytes::class),
            new ClassMap('DiscountRuleBytesEntity', Type\DiscountRuleBytesEntity::class),
            new ClassMap('DiscountRuleImportFromStrBytesResponse', Type\DiscountRuleImportFromStrBytesResponse::class),
            new ClassMap('BinStreamObject', Type\BinStreamObject::class),
        ]);
    }


}

