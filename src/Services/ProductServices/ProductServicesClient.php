<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ProductServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ProductAdd $parameters
     * @return ResultInterface|Type\ProductAddResponse
     * @throws SoapException
     */
    public function productAdd(\Heavymind\Oxatis\ApiClient\Type\ProductAdd $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductAddResponse
    {
        return $this->call('ProductAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductV2Add $parameters
     * @return ResultInterface|Type\ProductV2AddResponse
     * @throws SoapException
     */
    public function productV2Add(\Heavymind\Oxatis\ApiClient\Type\ProductV2Add $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductV2AddResponse
    {
        return $this->call('ProductV2Add', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDuplicate $parameters
     * @return ResultInterface|Type\ProductDuplicateResponse
     * @throws SoapException
     */
    public function productDuplicate(\Heavymind\Oxatis\ApiClient\Type\ProductDuplicate $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDuplicateResponse
    {
        return $this->call('ProductDuplicate', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductImport $parameters
     * @return ResultInterface|Type\ProductImportResponse
     * @throws SoapException
     */
    public function productImport(\Heavymind\Oxatis\ApiClient\Type\ProductImport $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductImportResponse
    {
        return $this->call('ProductImport', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductV2Import $parameters
     * @return ResultInterface|Type\ProductV2ImportResponse
     * @throws SoapException
     */
    public function productV2Import(\Heavymind\Oxatis\ApiClient\Type\ProductV2Import $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductV2ImportResponse
    {
        return $this->call('ProductV2Import', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdate $parameters
     * @return ResultInterface|Type\ProductUpdateResponse
     * @throws SoapException
     */
    public function productUpdate(\Heavymind\Oxatis\ApiClient\Type\ProductUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateResponse
    {
        return $this->call('ProductUpdate', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDelete $parameters
     * @return ResultInterface|Type\ProductDeleteResponse
     * @throws SoapException
     */
    public function productDelete(\Heavymind\Oxatis\ApiClient\Type\ProductDelete $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDeleteResponse
    {
        return $this->call('ProductDelete', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateCategories $parameters
     * @return ResultInterface|Type\ProductUpdateCategoriesResponse
     * @throws SoapException
     */
    public function productUpdateCategories(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateCategories $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateCategoriesResponse
    {
        return $this->call('ProductUpdateCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateAllPrices $parameters
     * @return ResultInterface|Type\ProductUpdateAllPricesResponse
     * @throws SoapException
     */
    public function productUpdateAllPrices(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateAllPrices $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateAllPricesResponse
    {
        return $this->call('ProductUpdateAllPrices', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateBrand $parameters
     * @return ResultInterface|Type\ProductUpdateBrandResponse
     * @throws SoapException
     */
    public function productUpdateBrand(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateBrand $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateBrandResponse
    {
        return $this->call('ProductUpdateBrand', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateDescriptions $parameters
     * @return ResultInterface|Type\ProductUpdateDescriptionsResponse
     * @throws SoapException
     */
    public function productUpdateDescriptions(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateDescriptions $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateDescriptionsResponse
    {
        return $this->call('ProductUpdateDescriptions', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateHandling $parameters
     * @return ResultInterface|Type\ProductUpdateHandlingResponse
     * @throws SoapException
     */
    public function productUpdateHandling(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateHandling $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateHandlingResponse
    {
        return $this->call('ProductUpdateHandling', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateImagesFileName $parameters
     * @return ResultInterface|Type\ProductUpdateImagesFileNameResponse
     * @throws SoapException
     */
    public function productUpdateImagesFileName(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateImagesFileName $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateImagesFileNameResponse
    {
        return $this->call('ProductUpdateImagesFileName', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateLanguage $parameters
     * @return ResultInterface|Type\ProductUpdateLanguageResponse
     * @throws SoapException
     */
    public function productUpdateLanguage(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateLanguage $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateLanguageResponse
    {
        return $this->call('ProductUpdateLanguage', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateName $parameters
     * @return ResultInterface|Type\ProductUpdateNameResponse
     * @throws SoapException
     */
    public function productUpdateName(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateName $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateNameResponse
    {
        return $this->call('ProductUpdateName', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateItemCode $parameters
     * @return ResultInterface|Type\ProductUpdateItemCodeResponse
     * @throws SoapException
     */
    public function productUpdateItemCode(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateItemCode $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateItemCodeResponse
    {
        return $this->call('ProductUpdateItemCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateEcotaxTI $parameters
     * @return ResultInterface|Type\ProductUpdateEcotaxTIResponse
     * @throws SoapException
     */
    public function productUpdateEcotaxTI(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateEcotaxTI $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateEcotaxTIResponse
    {
        return $this->call('ProductUpdateEcotaxTI', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateEANCode $parameters
     * @return ResultInterface|Type\ProductUpdateEANCodeResponse
     * @throws SoapException
     */
    public function productUpdateEANCode(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateEANCode $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateEANCodeResponse
    {
        return $this->call('ProductUpdateEANCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateItemCondition $parameters
     * @return ResultInterface|Type\ProductUpdateItemConditionResponse
     * @throws SoapException
     */
    public function productUpdateItemCondition(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateItemCondition $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateItemConditionResponse
    {
        return $this->call('ProductUpdateItemCondition', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateGuarantee $parameters
     * @return ResultInterface|Type\ProductUpdateGuaranteeResponse
     * @throws SoapException
     */
    public function productUpdateGuarantee(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateGuarantee $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateGuaranteeResponse
    {
        return $this->call('ProductUpdateGuarantee', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateUnitsForSale $parameters
     * @return ResultInterface|Type\ProductUpdateUnitsForSaleResponse
     * @throws SoapException
     */
    public function productUpdateUnitsForSale(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateUnitsForSale $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateUnitsForSaleResponse
    {
        return $this->call('ProductUpdateUnitsForSale', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateCost $parameters
     * @return ResultInterface|Type\ProductUpdateCostResponse
     * @throws SoapException
     */
    public function productUpdateCost(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateCost $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateCostResponse
    {
        return $this->call('ProductUpdateCost', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateItemInStock $parameters
     * @return ResultInterface|Type\ProductUpdateItemInStockResponse
     * @throws SoapException
     */
    public function productUpdateItemInStock(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateItemInStock $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateItemInStockResponse
    {
        return $this->call('ProductUpdateItemInStock', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdatePrice $parameters
     * @return ResultInterface|Type\ProductUpdatePriceResponse
     * @throws SoapException
     */
    public function productUpdatePrice(\Heavymind\Oxatis\ApiClient\Type\ProductUpdatePrice $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdatePriceResponse
    {
        return $this->call('ProductUpdatePrice', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdatePrice1 $parameters
     * @return ResultInterface|Type\ProductUpdatePrice1Response
     * @throws SoapException
     */
    public function productUpdatePrice1(\Heavymind\Oxatis\ApiClient\Type\ProductUpdatePrice1 $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdatePrice1Response
    {
        return $this->call('ProductUpdatePrice1', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdatePrice2 $parameters
     * @return ResultInterface|Type\ProductUpdatePrice2Response
     * @throws SoapException
     */
    public function productUpdatePrice2(\Heavymind\Oxatis\ApiClient\Type\ProductUpdatePrice2 $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdatePrice2Response
    {
        return $this->call('ProductUpdatePrice2', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdatePrice3 $parameters
     * @return ResultInterface|Type\ProductUpdatePrice3Response
     * @throws SoapException
     */
    public function productUpdatePrice3(\Heavymind\Oxatis\ApiClient\Type\ProductUpdatePrice3 $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdatePrice3Response
    {
        return $this->call('ProductUpdatePrice3', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdatePrice4 $parameters
     * @return ResultInterface|Type\ProductUpdatePrice4Response
     * @throws SoapException
     */
    public function productUpdatePrice4(\Heavymind\Oxatis\ApiClient\Type\ProductUpdatePrice4 $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdatePrice4Response
    {
        return $this->call('ProductUpdatePrice4', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateQuantityInStock $parameters
     * @return ResultInterface|Type\ProductUpdateQuantityInStockResponse
     * @throws SoapException
     */
    public function productUpdateQuantityInStock(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateQuantityInStock $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateQuantityInStockResponse
    {
        return $this->call('ProductUpdateQuantityInStock', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateQuantityReorder $parameters
     * @return ResultInterface|Type\ProductUpdateQuantityReorderResponse
     * @throws SoapException
     */
    public function productUpdateQuantityReorder(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateQuantityReorder $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateQuantityReorderResponse
    {
        return $this->call('ProductUpdateQuantityReorder', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateSEOProperties $parameters
     * @return ResultInterface|Type\ProductUpdateSEOPropertiesResponse
     * @throws SoapException
     */
    public function productUpdateSEOProperties(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateSEOProperties $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateSEOPropertiesResponse
    {
        return $this->call('ProductUpdateSEOProperties', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateShipPrice $parameters
     * @return ResultInterface|Type\ProductUpdateShipPriceResponse
     * @throws SoapException
     */
    public function productUpdateShipPrice(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateShipPrice $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateShipPriceResponse
    {
        return $this->call('ProductUpdateShipPrice', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateTaxRate $parameters
     * @return ResultInterface|Type\ProductUpdateTaxRateResponse
     * @throws SoapException
     */
    public function productUpdateTaxRate(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateTaxRate $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateTaxRateResponse
    {
        return $this->call('ProductUpdateTaxRate', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateWeightAndDimensions $parameters
     * @return ResultInterface|Type\ProductUpdateWeightAndDimensionsResponse
     * @throws SoapException
     */
    public function productUpdateWeightAndDimensions(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateWeightAndDimensions $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateWeightAndDimensionsResponse
    {
        return $this->call('ProductUpdateWeightAndDimensions', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductCount $parameters
     * @return ResultInterface|Type\ProductCountResponse
     * @throws SoapException
     */
    public function productCount(\Heavymind\Oxatis\ApiClient\Type\ProductCount $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductCountResponse
    {
        return $this->call('ProductCount', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductCountPerLanguage $parameters
     * @return ResultInterface|Type\ProductCountPerLanguageResponse
     * @throws SoapException
     */
    public function productCountPerLanguage(\Heavymind\Oxatis\ApiClient\Type\ProductCountPerLanguage $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductCountPerLanguageResponse
    {
        return $this->call('ProductCountPerLanguage', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGet $parameters
     * @return ResultInterface|Type\ProductGetResponse
     * @throws SoapException
     */
    public function productGet(\Heavymind\Oxatis\ApiClient\Type\ProductGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetResponse
    {
        return $this->call('ProductGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetCategories $parameters
     * @return ResultInterface|Type\ProductGetCategoriesResponse
     * @throws SoapException
     */
    public function productGetCategories(\Heavymind\Oxatis\ApiClient\Type\ProductGetCategories $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetCategoriesResponse
    {
        return $this->call('ProductGetCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetAllPrices $parameters
     * @return ResultInterface|Type\ProductGetAllPricesResponse
     * @throws SoapException
     */
    public function productGetAllPrices(\Heavymind\Oxatis\ApiClient\Type\ProductGetAllPrices $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetAllPricesResponse
    {
        return $this->call('ProductGetAllPrices', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetAvailability $parameters
     * @return ResultInterface|Type\ProductGetAvailabilityResponse
     * @throws SoapException
     */
    public function productGetAvailability(\Heavymind\Oxatis\ApiClient\Type\ProductGetAvailability $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetAvailabilityResponse
    {
        return $this->call('ProductGetAvailability', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetBrand $parameters
     * @return ResultInterface|Type\ProductGetBrandResponse
     * @throws SoapException
     */
    public function productGetBrand(\Heavymind\Oxatis\ApiClient\Type\ProductGetBrand $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetBrandResponse
    {
        return $this->call('ProductGetBrand', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetDescriptions $parameters
     * @return ResultInterface|Type\ProductGetDescriptionsResponse
     * @throws SoapException
     */
    public function productGetDescriptions(\Heavymind\Oxatis\ApiClient\Type\ProductGetDescriptions $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetDescriptionsResponse
    {
        return $this->call('ProductGetDescriptions', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetHandling $parameters
     * @return ResultInterface|Type\ProductGetHandlingResponse
     * @throws SoapException
     */
    public function productGetHandling(\Heavymind\Oxatis\ApiClient\Type\ProductGetHandling $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetHandlingResponse
    {
        return $this->call('ProductGetHandling', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetImageFilesName $parameters
     * @return ResultInterface|Type\ProductGetImageFilesNameResponse
     * @throws SoapException
     */
    public function productGetImageFilesName(\Heavymind\Oxatis\ApiClient\Type\ProductGetImageFilesName $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetImageFilesNameResponse
    {
        return $this->call('ProductGetImageFilesName', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetAdditionalImageList $parameters
     * @return ResultInterface|Type\ProductGetAdditionalImageListResponse
     * @throws SoapException
     */
    public function productGetAdditionalImageList(\Heavymind\Oxatis\ApiClient\Type\ProductGetAdditionalImageList $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetAdditionalImageListResponse
    {
        return $this->call('ProductGetAdditionalImageList', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetItemCode $parameters
     * @return ResultInterface|Type\ProductGetItemCodeResponse
     * @throws SoapException
     */
    public function productGetItemCode(\Heavymind\Oxatis\ApiClient\Type\ProductGetItemCode $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetItemCodeResponse
    {
        return $this->call('ProductGetItemCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetPrice $parameters
     * @return ResultInterface|Type\ProductGetPriceResponse
     * @throws SoapException
     */
    public function productGetPrice(\Heavymind\Oxatis\ApiClient\Type\ProductGetPrice $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetPriceResponse
    {
        return $this->call('ProductGetPrice', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetPrice1 $parameters
     * @return ResultInterface|Type\ProductGetPrice1Response
     * @throws SoapException
     */
    public function productGetPrice1(\Heavymind\Oxatis\ApiClient\Type\ProductGetPrice1 $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetPrice1Response
    {
        return $this->call('ProductGetPrice1', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetPrice2 $parameters
     * @return ResultInterface|Type\ProductGetPrice2Response
     * @throws SoapException
     */
    public function productGetPrice2(\Heavymind\Oxatis\ApiClient\Type\ProductGetPrice2 $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetPrice2Response
    {
        return $this->call('ProductGetPrice2', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetPrice3 $parameters
     * @return ResultInterface|Type\ProductGetPrice3Response
     * @throws SoapException
     */
    public function productGetPrice3(\Heavymind\Oxatis\ApiClient\Type\ProductGetPrice3 $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetPrice3Response
    {
        return $this->call('ProductGetPrice3', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetPrice4 $parameters
     * @return ResultInterface|Type\ProductGetPrice4Response
     * @throws SoapException
     */
    public function productGetPrice4(\Heavymind\Oxatis\ApiClient\Type\ProductGetPrice4 $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetPrice4Response
    {
        return $this->call('ProductGetPrice4', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetQuantityInStock $parameters
     * @return ResultInterface|Type\ProductGetQuantityInStockResponse
     * @throws SoapException
     */
    public function productGetQuantityInStock(\Heavymind\Oxatis\ApiClient\Type\ProductGetQuantityInStock $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetQuantityInStockResponse
    {
        return $this->call('ProductGetQuantityInStock', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetQuantityReorder $parameters
     * @return ResultInterface|Type\ProductGetQuantityReorderResponse
     * @throws SoapException
     */
    public function productGetQuantityReorder(\Heavymind\Oxatis\ApiClient\Type\ProductGetQuantityReorder $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetQuantityReorderResponse
    {
        return $this->call('ProductGetQuantityReorder', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetSEOProperties $parameters
     * @return ResultInterface|Type\ProductGetSEOPropertiesResponse
     * @throws SoapException
     */
    public function productGetSEOProperties(\Heavymind\Oxatis\ApiClient\Type\ProductGetSEOProperties $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetSEOPropertiesResponse
    {
        return $this->call('ProductGetSEOProperties', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetShipPrice $parameters
     * @return ResultInterface|Type\ProductGetShipPriceResponse
     * @throws SoapException
     */
    public function productGetShipPrice(\Heavymind\Oxatis\ApiClient\Type\ProductGetShipPrice $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetShipPriceResponse
    {
        return $this->call('ProductGetShipPrice', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetTaxRate $parameters
     * @return ResultInterface|Type\ProductGetTaxRateResponse
     * @throws SoapException
     */
    public function productGetTaxRate(\Heavymind\Oxatis\ApiClient\Type\ProductGetTaxRate $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetTaxRateResponse
    {
        return $this->call('ProductGetTaxRate', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetWeightAndDimensions $parameters
     * @return ResultInterface|Type\ProductGetWeightAndDimensionsResponse
     * @throws SoapException
     */
    public function productGetWeightAndDimensions(\Heavymind\Oxatis\ApiClient\Type\ProductGetWeightAndDimensions $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetWeightAndDimensionsResponse
    {
        return $this->call('ProductGetWeightAndDimensions', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetLanguage $parameters
     * @return ResultInterface|Type\ProductGetLanguageResponse
     * @throws SoapException
     */
    public function productGetLanguage(\Heavymind\Oxatis\ApiClient\Type\ProductGetLanguage $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetLanguageResponse
    {
        return $this->call('ProductGetLanguage', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetName $parameters
     * @return ResultInterface|Type\ProductGetNameResponse
     * @throws SoapException
     */
    public function productGetName(\Heavymind\Oxatis\ApiClient\Type\ProductGetName $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetNameResponse
    {
        return $this->call('ProductGetName', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetItemInStock $parameters
     * @return ResultInterface|Type\ProductGetItemInStockResponse
     * @throws SoapException
     */
    public function productGetItemInStock(\Heavymind\Oxatis\ApiClient\Type\ProductGetItemInStock $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetItemInStockResponse
    {
        return $this->call('ProductGetItemInStock', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetEcotaxTI $parameters
     * @return ResultInterface|Type\ProductGetEcotaxTIResponse
     * @throws SoapException
     */
    public function productGetEcotaxTI(\Heavymind\Oxatis\ApiClient\Type\ProductGetEcotaxTI $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetEcotaxTIResponse
    {
        return $this->call('ProductGetEcotaxTI', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetEANCode $parameters
     * @return ResultInterface|Type\ProductGetEANCodeResponse
     * @throws SoapException
     */
    public function productGetEANCode(\Heavymind\Oxatis\ApiClient\Type\ProductGetEANCode $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetEANCodeResponse
    {
        return $this->call('ProductGetEANCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetItemCondition $parameters
     * @return ResultInterface|Type\ProductGetItemConditionResponse
     * @throws SoapException
     */
    public function productGetItemCondition(\Heavymind\Oxatis\ApiClient\Type\ProductGetItemCondition $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetItemConditionResponse
    {
        return $this->call('ProductGetItemCondition', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetGuarantee $parameters
     * @return ResultInterface|Type\ProductGetGuaranteeResponse
     * @throws SoapException
     */
    public function productGetGuarantee(\Heavymind\Oxatis\ApiClient\Type\ProductGetGuarantee $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetGuaranteeResponse
    {
        return $this->call('ProductGetGuarantee', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetUnitsForSale $parameters
     * @return ResultInterface|Type\ProductGetUnitsForSaleResponse
     * @throws SoapException
     */
    public function productGetUnitsForSale(\Heavymind\Oxatis\ApiClient\Type\ProductGetUnitsForSale $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetUnitsForSaleResponse
    {
        return $this->call('ProductGetUnitsForSale', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetCost $parameters
     * @return ResultInterface|Type\ProductGetCostResponse
     * @throws SoapException
     */
    public function productGetCost(\Heavymind\Oxatis\ApiClient\Type\ProductGetCost $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetCostResponse
    {
        return $this->call('ProductGetCost', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetDiscountGridCode $parameters
     * @return ResultInterface|Type\ProductGetDiscountGridCodeResponse
     * @throws SoapException
     */
    public function productGetDiscountGridCode(\Heavymind\Oxatis\ApiClient\Type\ProductGetDiscountGridCode $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetDiscountGridCodeResponse
    {
        return $this->call('ProductGetDiscountGridCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetList $parameters
     * @return ResultInterface|Type\ProductGetListResponse
     * @throws SoapException
     */
    public function productGetList(\Heavymind\Oxatis\ApiClient\Type\ProductGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetListResponse
    {
        return $this->call('ProductGetList', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateItemQtyList $parameters
     * @return ResultInterface|Type\ProductUpdateItemQtyListResponse
     * @throws SoapException
     */
    public function productUpdateItemQtyList(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateItemQtyList $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateItemQtyListResponse
    {
        return $this->call('ProductUpdateItemQtyList', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductAddCrossSellItem $parameters
     * @return ResultInterface|Type\ProductAddCrossSellItemResponse
     * @throws SoapException
     */
    public function productAddCrossSellItem(\Heavymind\Oxatis\ApiClient\Type\ProductAddCrossSellItem $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductAddCrossSellItemResponse
    {
        return $this->call('ProductAddCrossSellItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductAddUpSellItem $parameters
     * @return ResultInterface|Type\ProductAddUpSellItemResponse
     * @throws SoapException
     */
    public function productAddUpSellItem(\Heavymind\Oxatis\ApiClient\Type\ProductAddUpSellItem $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductAddUpSellItemResponse
    {
        return $this->call('ProductAddUpSellItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductAddLinkedItem $parameters
     * @return ResultInterface|Type\ProductAddLinkedItemResponse
     * @throws SoapException
     */
    public function productAddLinkedItem(\Heavymind\Oxatis\ApiClient\Type\ProductAddLinkedItem $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductAddLinkedItemResponse
    {
        return $this->call('ProductAddLinkedItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDeleteCrossSellItem $parameters
     * @return ResultInterface|Type\ProductDeleteCrossSellItemResponse
     * @throws SoapException
     */
    public function productDeleteCrossSellItem(\Heavymind\Oxatis\ApiClient\Type\ProductDeleteCrossSellItem $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDeleteCrossSellItemResponse
    {
        return $this->call('ProductDeleteCrossSellItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDeleteUpSellItem $parameters
     * @return ResultInterface|Type\ProductDeleteUpSellItemResponse
     * @throws SoapException
     */
    public function productDeleteUpSellItem(\Heavymind\Oxatis\ApiClient\Type\ProductDeleteUpSellItem $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDeleteUpSellItemResponse
    {
        return $this->call('ProductDeleteUpSellItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDeleteLinkedItem $parameters
     * @return ResultInterface|Type\ProductDeleteLinkedItemResponse
     * @throws SoapException
     */
    public function productDeleteLinkedItem(\Heavymind\Oxatis\ApiClient\Type\ProductDeleteLinkedItem $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDeleteLinkedItemResponse
    {
        return $this->call('ProductDeleteLinkedItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDeleteAllCrossSellItems $parameters
     * @return ResultInterface|Type\ProductDeleteAllCrossSellItemsResponse
     * @throws SoapException
     */
    public function productDeleteAllCrossSellItems(\Heavymind\Oxatis\ApiClient\Type\ProductDeleteAllCrossSellItems $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDeleteAllCrossSellItemsResponse
    {
        return $this->call('ProductDeleteAllCrossSellItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDeleteAllUpSellItems $parameters
     * @return ResultInterface|Type\ProductDeleteAllUpSellItemsResponse
     * @throws SoapException
     */
    public function productDeleteAllUpSellItems(\Heavymind\Oxatis\ApiClient\Type\ProductDeleteAllUpSellItems $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDeleteAllUpSellItemsResponse
    {
        return $this->call('ProductDeleteAllUpSellItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDeleteAllLinkedItems $parameters
     * @return ResultInterface|Type\ProductDeleteAllLinkedItemsResponse
     * @throws SoapException
     */
    public function productDeleteAllLinkedItems(\Heavymind\Oxatis\ApiClient\Type\ProductDeleteAllLinkedItems $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDeleteAllLinkedItemsResponse
    {
        return $this->call('ProductDeleteAllLinkedItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductResetFields $parameters
     * @return ResultInterface|Type\ProductResetFieldsResponse
     * @throws SoapException
     */
    public function productResetFields(\Heavymind\Oxatis\ApiClient\Type\ProductResetFields $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductResetFieldsResponse
    {
        return $this->call('ProductResetFields', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductGetRelatedItems $parameters
     * @return ResultInterface|Type\ProductGetRelatedItemsResponse
     * @throws SoapException
     */
    public function productGetRelatedItems(\Heavymind\Oxatis\ApiClient\Type\ProductGetRelatedItems $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetRelatedItemsResponse
    {
        return $this->call('ProductGetRelatedItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductIsItemSKUDuplicated $parameters
     * @return ResultInterface|Type\ProductIsItemSKUDuplicatedResponse
     * @throws SoapException
     */
    public function productIsItemSKUDuplicated(\Heavymind\Oxatis\ApiClient\Type\ProductIsItemSKUDuplicated $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductIsItemSKUDuplicatedResponse
    {
        return $this->call('ProductIsItemSKUDuplicated', $parameters);
    }


}

