<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductPackagingServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ProductPackagingServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ProductUpdatePackaging $parameters
     * @return ResultInterface|Type\ProductUpdatePackagingResponse
     * @throws SoapException
     */
    public function productUpdatePackaging(\Heavymind\Oxatis\ApiClient\Type\ProductUpdatePackaging $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdatePackagingResponse
    {
        return $this->call('ProductUpdatePackaging', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateUserPricePerPackaging $parameters
     * @return ResultInterface|Type\ProductUpdateUserPricePerPackagingResponse
     * @throws SoapException
     */
    public function productUpdateUserPricePerPackaging(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateUserPricePerPackaging $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateUserPricePerPackagingResponse
    {
        return $this->call('ProductUpdateUserPricePerPackaging', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdatePackagingOptions $parameters
     * @return ResultInterface|Type\ProductUpdatePackagingOptionsResponse
     * @throws SoapException
     */
    public function productUpdatePackagingOptions(\Heavymind\Oxatis\ApiClient\Type\ProductUpdatePackagingOptions $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdatePackagingOptionsResponse
    {
        return $this->call('ProductUpdatePackagingOptions', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDeletePackaging $parameters
     * @return ResultInterface|Type\ProductDeletePackagingResponse
     * @throws SoapException
     */
    public function productDeletePackaging(\Heavymind\Oxatis\ApiClient\Type\ProductDeletePackaging $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDeletePackagingResponse
    {
        return $this->call('ProductDeletePackaging', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductDeleteUserPackagingPrices $parameters
     * @return ResultInterface|Type\ProductDeleteUserPackagingPricesResponse
     * @throws SoapException
     */
    public function productDeleteUserPackagingPrices(\Heavymind\Oxatis\ApiClient\Type\ProductDeleteUserPackagingPrices $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductDeleteUserPackagingPricesResponse
    {
        return $this->call('ProductDeleteUserPackagingPrices', $parameters);
    }


}

