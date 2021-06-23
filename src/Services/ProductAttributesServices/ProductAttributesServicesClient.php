<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ProductAttributesServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ProductAttributesUpdate $parameters
     * @return ResultInterface|Type\ProductAttributesUpdateResponse
     * @throws SoapException
     */
    public function productAttributesUpdate(\Heavymind\Oxatis\ApiClient\Type\ProductAttributesUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductAttributesUpdateResponse
    {
        return $this->call('ProductAttributesUpdate', $parameters);
    }


}

