<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductBundleServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ProductBundleServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ProductGetBundledItems $parameters
     * @return ResultInterface|Type\ProductGetBundledItemsResponse
     * @throws SoapException
     */
    public function productGetBundledItems(\Heavymind\Oxatis\ApiClient\Type\ProductGetBundledItems $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductGetBundledItemsResponse
    {
        return $this->call('ProductGetBundledItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductUpdateBundledItems $parameters
     * @return ResultInterface|Type\ProductUpdateBundledItemsResponse
     * @throws SoapException
     */
    public function productUpdateBundledItems(\Heavymind\Oxatis\ApiClient\Type\ProductUpdateBundledItems $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductUpdateBundledItemsResponse
    {
        return $this->call('ProductUpdateBundledItems', $parameters);
    }


}

