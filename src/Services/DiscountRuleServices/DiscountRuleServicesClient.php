<?php

namespace Heavymind\Oxatis\ApiClient\Services\DiscountRuleServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class DiscountRuleServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\DiscountRuleLinkToProductPriceUpdate $parameters
     * @return ResultInterface|Type\DiscountRuleLinkToProductPriceUpdateResponse
     * @throws SoapException
     */
    public function discountRuleLinkToProductPriceUpdate(\Heavymind\Oxatis\ApiClient\Type\DiscountRuleLinkToProductPriceUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\DiscountRuleLinkToProductPriceUpdateResponse
    {
        return $this->call('DiscountRuleLinkToProductPriceUpdate', $parameters);
    }

    /**
     * @param RequestInterface|Type\DiscountRuleCustomPriceUpdate $parameters
     * @return ResultInterface|Type\DiscountRuleCustomPriceUpdateResponse
     * @throws SoapException
     */
    public function discountRuleCustomPriceUpdate(\Heavymind\Oxatis\ApiClient\Type\DiscountRuleCustomPriceUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\DiscountRuleCustomPriceUpdateResponse
    {
        return $this->call('DiscountRuleCustomPriceUpdate', $parameters);
    }

    /**
     * @param RequestInterface|Type\DiscountRuleProductFamilyUserUpdate $parameters
     * @return ResultInterface|Type\DiscountRuleProductFamilyUserUpdateResponse
     * @throws SoapException
     */
    public function discountRuleProductFamilyUserUpdate(\Heavymind\Oxatis\ApiClient\Type\DiscountRuleProductFamilyUserUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\DiscountRuleProductFamilyUserUpdateResponse
    {
        return $this->call('DiscountRuleProductFamilyUserUpdate', $parameters);
    }

    /**
     * @param RequestInterface|Type\DiscountRuleUpdateComputeMode $parameters
     * @return ResultInterface|Type\DiscountRuleUpdateComputeModeResponse
     * @throws SoapException
     */
    public function discountRuleUpdateComputeMode(\Heavymind\Oxatis\ApiClient\Type\DiscountRuleUpdateComputeMode $parameters) : \Heavymind\Oxatis\ApiClient\Type\DiscountRuleUpdateComputeModeResponse
    {
        return $this->call('DiscountRuleUpdateComputeMode', $parameters);
    }

    /**
     * @param RequestInterface|Type\DiscountRuleDelete $parameters
     * @return ResultInterface|Type\DiscountRuleDeleteResponse
     * @throws SoapException
     */
    public function discountRuleDelete(\Heavymind\Oxatis\ApiClient\Type\DiscountRuleDelete $parameters) : \Heavymind\Oxatis\ApiClient\Type\DiscountRuleDeleteResponse
    {
        return $this->call('DiscountRuleDelete', $parameters);
    }

    /**
     * @param RequestInterface|Type\DiscountRuleImportFromStrBytes $parameters
     * @return ResultInterface|Type\DiscountRuleImportFromStrBytesResponse
     * @throws SoapException
     */
    public function discountRuleImportFromStrBytes(\Heavymind\Oxatis\ApiClient\Type\DiscountRuleImportFromStrBytes $parameters) : \Heavymind\Oxatis\ApiClient\Type\DiscountRuleImportFromStrBytesResponse
    {
        return $this->call('DiscountRuleImportFromStrBytes', $parameters);
    }


}

