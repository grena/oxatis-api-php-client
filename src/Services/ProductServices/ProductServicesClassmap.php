<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ProductServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ProductAdd', Type\ProductAdd::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('ProductEntity', Type\ProductEntity::class),
            new ClassMap('ProductBaseEntity', Type\ProductBaseEntity::class),
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
            new ClassMap('PriceVATModeEntity', Type\PriceVATModeEntity::class),
            new ClassMap('ArrayOfImagesListIdEntity', Type\ArrayOfImagesListIdEntity::class),
            new ClassMap('ArrayOfTaxAmountEntity', Type\ArrayOfTaxAmountEntity::class),
            new ClassMap('QuantityEntity', Type\QuantityEntity::class),
            new ClassMap('ProductAddResponse', Type\ProductAddResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('ProductV2Add', Type\ProductV2Add::class),
            new ClassMap('ProductV2AddResponse', Type\ProductV2AddResponse::class),
            new ClassMap('SoapDataResultServiceOfProductResultDataProductIdEntity', Type\SoapDataResultServiceOfProductResultDataProductIdEntity::class),
            new ClassMap('ProductResultData', Type\ProductResultData::class),
            new ClassMap('ProductDuplicate', Type\ProductDuplicate::class),
            new ClassMap('ProductDuplicateResponse', Type\ProductDuplicateResponse::class),
            new ClassMap('ProductImport', Type\ProductImport::class),
            new ClassMap('ProductImportResponse', Type\ProductImportResponse::class),
            new ClassMap('ProductV2Import', Type\ProductV2Import::class),
            new ClassMap('ProductV2ImportResponse', Type\ProductV2ImportResponse::class),
            new ClassMap('ProductUpdate', Type\ProductUpdate::class),
            new ClassMap('ProductUpdateResponse', Type\ProductUpdateResponse::class),
            new ClassMap('ProductDelete', Type\ProductDelete::class),
            new ClassMap('ProductDeleteResponse', Type\ProductDeleteResponse::class),
            new ClassMap('ProductUpdateCategories', Type\ProductUpdateCategories::class),
            new ClassMap('ProductUpdateCategoriesResponse', Type\ProductUpdateCategoriesResponse::class),
            new ClassMap('ProductUpdateAllPrices', Type\ProductUpdateAllPrices::class),
            new ClassMap('ProductUpdateAllPricesResponse', Type\ProductUpdateAllPricesResponse::class),
            new ClassMap('ProductUpdateBrand', Type\ProductUpdateBrand::class),
            new ClassMap('ProductUpdateBrandResponse', Type\ProductUpdateBrandResponse::class),
            new ClassMap('ProductUpdateDescriptions', Type\ProductUpdateDescriptions::class),
            new ClassMap('ProductUpdateDescriptionsResponse', Type\ProductUpdateDescriptionsResponse::class),
            new ClassMap('ProductUpdateHandling', Type\ProductUpdateHandling::class),
            new ClassMap('ProductUpdateHandlingResponse', Type\ProductUpdateHandlingResponse::class),
            new ClassMap('ProductUpdateImagesFileName', Type\ProductUpdateImagesFileName::class),
            new ClassMap('ProductUpdateImagesFileNameResponse', Type\ProductUpdateImagesFileNameResponse::class),
            new ClassMap('ProductUpdateLanguage', Type\ProductUpdateLanguage::class),
            new ClassMap('ProductUpdateLanguageResponse', Type\ProductUpdateLanguageResponse::class),
            new ClassMap('ProductUpdateName', Type\ProductUpdateName::class),
            new ClassMap('ProductUpdateNameResponse', Type\ProductUpdateNameResponse::class),
            new ClassMap('ProductUpdateItemCode', Type\ProductUpdateItemCode::class),
            new ClassMap('ProductUpdateItemCodeResponse', Type\ProductUpdateItemCodeResponse::class),
            new ClassMap('ProductUpdateEcotaxTI', Type\ProductUpdateEcotaxTI::class),
            new ClassMap('ProductUpdateEcotaxTIResponse', Type\ProductUpdateEcotaxTIResponse::class),
            new ClassMap('ProductUpdateEANCode', Type\ProductUpdateEANCode::class),
            new ClassMap('ProductUpdateEANCodeResponse', Type\ProductUpdateEANCodeResponse::class),
            new ClassMap('ProductUpdateItemCondition', Type\ProductUpdateItemCondition::class),
            new ClassMap('ProductUpdateItemConditionResponse', Type\ProductUpdateItemConditionResponse::class),
            new ClassMap('ProductUpdateGuarantee', Type\ProductUpdateGuarantee::class),
            new ClassMap('ProductUpdateGuaranteeResponse', Type\ProductUpdateGuaranteeResponse::class),
            new ClassMap('ProductUpdateUnitsForSale', Type\ProductUpdateUnitsForSale::class),
            new ClassMap('ProductUpdateUnitsForSaleResponse', Type\ProductUpdateUnitsForSaleResponse::class),
            new ClassMap('ProductUpdateCost', Type\ProductUpdateCost::class),
            new ClassMap('ProductUpdateCostResponse', Type\ProductUpdateCostResponse::class),
            new ClassMap('ProductUpdateItemInStock', Type\ProductUpdateItemInStock::class),
            new ClassMap('ProductUpdateItemInStockResponse', Type\ProductUpdateItemInStockResponse::class),
            new ClassMap('ProductUpdatePrice', Type\ProductUpdatePrice::class),
            new ClassMap('ProductUpdatePriceResponse', Type\ProductUpdatePriceResponse::class),
            new ClassMap('ProductUpdatePrice1', Type\ProductUpdatePrice1::class),
            new ClassMap('ProductUpdatePrice1Response', Type\ProductUpdatePrice1Response::class),
            new ClassMap('ProductUpdatePrice2', Type\ProductUpdatePrice2::class),
            new ClassMap('ProductUpdatePrice2Response', Type\ProductUpdatePrice2Response::class),
            new ClassMap('ProductUpdatePrice3', Type\ProductUpdatePrice3::class),
            new ClassMap('ProductUpdatePrice3Response', Type\ProductUpdatePrice3Response::class),
            new ClassMap('ProductUpdatePrice4', Type\ProductUpdatePrice4::class),
            new ClassMap('ProductUpdatePrice4Response', Type\ProductUpdatePrice4Response::class),
            new ClassMap('ProductUpdateQuantityInStock', Type\ProductUpdateQuantityInStock::class),
            new ClassMap('ProductUpdateQuantityInStockResponse', Type\ProductUpdateQuantityInStockResponse::class),
            new ClassMap('ProductUpdateQuantityReorder', Type\ProductUpdateQuantityReorder::class),
            new ClassMap('ProductUpdateQuantityReorderResponse', Type\ProductUpdateQuantityReorderResponse::class),
            new ClassMap('ProductUpdateSEOProperties', Type\ProductUpdateSEOProperties::class),
            new ClassMap('ProductUpdateSEOPropertiesResponse', Type\ProductUpdateSEOPropertiesResponse::class),
            new ClassMap('ProductUpdateShipPrice', Type\ProductUpdateShipPrice::class),
            new ClassMap('ProductUpdateShipPriceResponse', Type\ProductUpdateShipPriceResponse::class),
            new ClassMap('ProductUpdateTaxRate', Type\ProductUpdateTaxRate::class),
            new ClassMap('ProductUpdateTaxRateResponse', Type\ProductUpdateTaxRateResponse::class),
            new ClassMap('ProductUpdateWeightAndDimensions', Type\ProductUpdateWeightAndDimensions::class),
            new ClassMap('ProductUpdateWeightAndDimensionsResponse', Type\ProductUpdateWeightAndDimensionsResponse::class),
            new ClassMap('ProductCount', Type\ProductCount::class),
            new ClassMap('ProductCountResponse', Type\ProductCountResponse::class),
            new ClassMap('ProductCountPerLanguage', Type\ProductCountPerLanguage::class),
            new ClassMap('LanguageEntity', Type\LanguageEntity::class),
            new ClassMap('ProductCountPerLanguageResponse', Type\ProductCountPerLanguageResponse::class),
            new ClassMap('ProductGet', Type\ProductGet::class),
            new ClassMap('ProductGetResponse', Type\ProductGetResponse::class),
            new ClassMap('SoapDataResultServiceOfProductDataProductEntity', Type\SoapDataResultServiceOfProductDataProductEntity::class),
            new ClassMap('ProductData', Type\ProductData::class),
            new ClassMap('ProductGetCategories', Type\ProductGetCategories::class),
            new ClassMap('ProductGetCategoriesResponse', Type\ProductGetCategoriesResponse::class),
            new ClassMap('ProductGetAllPrices', Type\ProductGetAllPrices::class),
            new ClassMap('ProductGetAllPricesResponse', Type\ProductGetAllPricesResponse::class),
            new ClassMap('ProductGetAvailability', Type\ProductGetAvailability::class),
            new ClassMap('ProductGetAvailabilityResponse', Type\ProductGetAvailabilityResponse::class),
            new ClassMap('ProductGetBrand', Type\ProductGetBrand::class),
            new ClassMap('ProductGetBrandResponse', Type\ProductGetBrandResponse::class),
            new ClassMap('ProductGetDescriptions', Type\ProductGetDescriptions::class),
            new ClassMap('ProductGetDescriptionsResponse', Type\ProductGetDescriptionsResponse::class),
            new ClassMap('ProductGetHandling', Type\ProductGetHandling::class),
            new ClassMap('ProductGetHandlingResponse', Type\ProductGetHandlingResponse::class),
            new ClassMap('ProductGetImageFilesName', Type\ProductGetImageFilesName::class),
            new ClassMap('ProductGetImageFilesNameResponse', Type\ProductGetImageFilesNameResponse::class),
            new ClassMap('ProductGetAdditionalImageList', Type\ProductGetAdditionalImageList::class),
            new ClassMap('ProductKeyEntity', Type\ProductKeyEntity::class),
            new ClassMap('ProductGetAdditionalImageListResponse', Type\ProductGetAdditionalImageListResponse::class),
            new ClassMap('SoapDataResultServiceOfProductImageListDataProductImageListEntity', Type\SoapDataResultServiceOfProductImageListDataProductImageListEntity::class),
            new ClassMap('ProductImageListData', Type\ProductImageListData::class),
            new ClassMap('ProductImageListEntity', Type\ProductImageListEntity::class),
            new ClassMap('ArrayOfImagesListEntity', Type\ArrayOfImagesListEntity::class),
            new ClassMap('ImagesListEntity', Type\ImagesListEntity::class),
            new ClassMap('ProductGetItemCode', Type\ProductGetItemCode::class),
            new ClassMap('ProductGetItemCodeResponse', Type\ProductGetItemCodeResponse::class),
            new ClassMap('ProductGetPrice', Type\ProductGetPrice::class),
            new ClassMap('ProductGetPriceResponse', Type\ProductGetPriceResponse::class),
            new ClassMap('ProductGetPrice1', Type\ProductGetPrice1::class),
            new ClassMap('ProductGetPrice1Response', Type\ProductGetPrice1Response::class),
            new ClassMap('ProductGetPrice2', Type\ProductGetPrice2::class),
            new ClassMap('ProductGetPrice2Response', Type\ProductGetPrice2Response::class),
            new ClassMap('ProductGetPrice3', Type\ProductGetPrice3::class),
            new ClassMap('ProductGetPrice3Response', Type\ProductGetPrice3Response::class),
            new ClassMap('ProductGetPrice4', Type\ProductGetPrice4::class),
            new ClassMap('ProductGetPrice4Response', Type\ProductGetPrice4Response::class),
            new ClassMap('ProductGetQuantityInStock', Type\ProductGetQuantityInStock::class),
            new ClassMap('ProductGetQuantityInStockResponse', Type\ProductGetQuantityInStockResponse::class),
            new ClassMap('ProductGetQuantityReorder', Type\ProductGetQuantityReorder::class),
            new ClassMap('ProductGetQuantityReorderResponse', Type\ProductGetQuantityReorderResponse::class),
            new ClassMap('ProductGetSEOProperties', Type\ProductGetSEOProperties::class),
            new ClassMap('ProductGetSEOPropertiesResponse', Type\ProductGetSEOPropertiesResponse::class),
            new ClassMap('ProductGetShipPrice', Type\ProductGetShipPrice::class),
            new ClassMap('ProductGetShipPriceResponse', Type\ProductGetShipPriceResponse::class),
            new ClassMap('ProductGetTaxRate', Type\ProductGetTaxRate::class),
            new ClassMap('ProductGetTaxRateResponse', Type\ProductGetTaxRateResponse::class),
            new ClassMap('ProductGetWeightAndDimensions', Type\ProductGetWeightAndDimensions::class),
            new ClassMap('ProductGetWeightAndDimensionsResponse', Type\ProductGetWeightAndDimensionsResponse::class),
            new ClassMap('ProductGetLanguage', Type\ProductGetLanguage::class),
            new ClassMap('ProductGetLanguageResponse', Type\ProductGetLanguageResponse::class),
            new ClassMap('ProductGetName', Type\ProductGetName::class),
            new ClassMap('ProductGetNameResponse', Type\ProductGetNameResponse::class),
            new ClassMap('ProductGetItemInStock', Type\ProductGetItemInStock::class),
            new ClassMap('ProductGetItemInStockResponse', Type\ProductGetItemInStockResponse::class),
            new ClassMap('ProductGetEcotaxTI', Type\ProductGetEcotaxTI::class),
            new ClassMap('ProductGetEcotaxTIResponse', Type\ProductGetEcotaxTIResponse::class),
            new ClassMap('ProductGetEANCode', Type\ProductGetEANCode::class),
            new ClassMap('ProductGetEANCodeResponse', Type\ProductGetEANCodeResponse::class),
            new ClassMap('ProductGetItemCondition', Type\ProductGetItemCondition::class),
            new ClassMap('ProductGetItemConditionResponse', Type\ProductGetItemConditionResponse::class),
            new ClassMap('ProductGetGuarantee', Type\ProductGetGuarantee::class),
            new ClassMap('ProductGetGuaranteeResponse', Type\ProductGetGuaranteeResponse::class),
            new ClassMap('ProductGetUnitsForSale', Type\ProductGetUnitsForSale::class),
            new ClassMap('ProductGetUnitsForSaleResponse', Type\ProductGetUnitsForSaleResponse::class),
            new ClassMap('ProductGetCost', Type\ProductGetCost::class),
            new ClassMap('ProductGetCostResponse', Type\ProductGetCostResponse::class),
            new ClassMap('ProductGetDiscountGridCode', Type\ProductGetDiscountGridCode::class),
            new ClassMap('ProductGetDiscountGridCodeResponse', Type\ProductGetDiscountGridCodeResponse::class),
            new ClassMap('ProductGetList', Type\ProductGetList::class),
            new ClassMap('ProductListEntity', Type\ProductListEntity::class),
            new ClassMap('PaginationEntity', Type\PaginationEntity::class),
            new ClassMap('ArrayOfProductIdEntity', Type\ArrayOfProductIdEntity::class),
            new ClassMap('ProductGetListResponse', Type\ProductGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfProductListDataProductListEntity', Type\SoapDataResultServiceOfProductListDataProductListEntity::class),
            new ClassMap('ProductListData', Type\ProductListData::class),
            new ClassMap('ProductUpdateItemQtyList', Type\ProductUpdateItemQtyList::class),
            new ClassMap('ArrayOfUpdateItemStockEntity', Type\ArrayOfUpdateItemStockEntity::class),
            new ClassMap('UpdateItemStockEntity', Type\UpdateItemStockEntity::class),
            new ClassMap('ProductUpdateItemQtyListResponse', Type\ProductUpdateItemQtyListResponse::class),
            new ClassMap('SummaryListResultService', Type\SummaryListResultService::class),
            new ClassMap('SummaryResultList', Type\SummaryResultList::class),
            new ClassMap('ArrayOfSoapDataResultServiceOfOxIdDataInt32', Type\ArrayOfSoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('ProductAddCrossSellItem', Type\ProductAddCrossSellItem::class),
            new ClassMap('RelatedProductEntity', Type\RelatedProductEntity::class),
            new ClassMap('ProductAddCrossSellItemResponse', Type\ProductAddCrossSellItemResponse::class),
            new ClassMap('ProductAddUpSellItem', Type\ProductAddUpSellItem::class),
            new ClassMap('ProductAddUpSellItemResponse', Type\ProductAddUpSellItemResponse::class),
            new ClassMap('ProductAddLinkedItem', Type\ProductAddLinkedItem::class),
            new ClassMap('LinkedProductEntity', Type\LinkedProductEntity::class),
            new ClassMap('LinkedProductBaseEntity', Type\LinkedProductBaseEntity::class),
            new ClassMap('ProductAddLinkedItemResponse', Type\ProductAddLinkedItemResponse::class),
            new ClassMap('ProductDeleteCrossSellItem', Type\ProductDeleteCrossSellItem::class),
            new ClassMap('ProductDeleteCrossSellItemResponse', Type\ProductDeleteCrossSellItemResponse::class),
            new ClassMap('ProductDeleteUpSellItem', Type\ProductDeleteUpSellItem::class),
            new ClassMap('ProductDeleteUpSellItemResponse', Type\ProductDeleteUpSellItemResponse::class),
            new ClassMap('ProductDeleteLinkedItem', Type\ProductDeleteLinkedItem::class),
            new ClassMap('ProductDeleteLinkedItemResponse', Type\ProductDeleteLinkedItemResponse::class),
            new ClassMap('ProductDeleteAllCrossSellItems', Type\ProductDeleteAllCrossSellItems::class),
            new ClassMap('ProductDeleteAllCrossSellItemsResponse', Type\ProductDeleteAllCrossSellItemsResponse::class),
            new ClassMap('ProductDeleteAllUpSellItems', Type\ProductDeleteAllUpSellItems::class),
            new ClassMap('ProductDeleteAllUpSellItemsResponse', Type\ProductDeleteAllUpSellItemsResponse::class),
            new ClassMap('ProductDeleteAllLinkedItems', Type\ProductDeleteAllLinkedItems::class),
            new ClassMap('ProductDeleteAllLinkedItemsResponse', Type\ProductDeleteAllLinkedItemsResponse::class),
            new ClassMap('ProductResetFields', Type\ProductResetFields::class),
            new ClassMap('ProductResetFieldsEntity', Type\ProductResetFieldsEntity::class),
            new ClassMap('ProductResetFieldsResponse', Type\ProductResetFieldsResponse::class),
            new ClassMap('ProductGetRelatedItems', Type\ProductGetRelatedItems::class),
            new ClassMap('ProductItemSKULanguageIdEntity', Type\ProductItemSKULanguageIdEntity::class),
            new ClassMap('ProductGetRelatedItemsResponse', Type\ProductGetRelatedItemsResponse::class),
            new ClassMap('SoapDataResultServiceOfRelatedItemsDataProductRelatedItemsEntity', Type\SoapDataResultServiceOfRelatedItemsDataProductRelatedItemsEntity::class),
            new ClassMap('RelatedItemsData', Type\RelatedItemsData::class),
            new ClassMap('ProductRelatedItemsEntity', Type\ProductRelatedItemsEntity::class),
            new ClassMap('ArrayOfOxatisEntity', Type\ArrayOfOxatisEntity::class),
            new ClassMap('ArrayOfOxatisEntity1', Type\ArrayOfOxatisEntity1::class),
            new ClassMap('ArrayOfOxatisEntity2', Type\ArrayOfOxatisEntity2::class),
            new ClassMap('ProductIsItemSKUDuplicated', Type\ProductIsItemSKUDuplicated::class),
            new ClassMap('ProductItemSKULanguageEntity', Type\ProductItemSKULanguageEntity::class),
            new ClassMap('ProductIsItemSKUDuplicatedResponse', Type\ProductIsItemSKUDuplicatedResponse::class),
            new ClassMap('SoapDataResultServiceOfDataBoolBoolean', Type\SoapDataResultServiceOfDataBoolBoolean::class),
            new ClassMap('DataBool', Type\DataBool::class),
        ]);
    }


}

