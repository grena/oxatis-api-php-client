<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductWebBlockServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ProductWebBlockServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ProductWebBlockUpdate $parameters
     * @return ResultInterface|Type\ProductWebBlockUpdateResponse
     * @throws SoapException
     */
    public function productWebBlockUpdate(\Heavymind\Oxatis\ApiClient\Type\ProductWebBlockUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductWebBlockUpdateResponse
    {
        return $this->call('ProductWebBlockUpdate', $parameters);
    }


}

