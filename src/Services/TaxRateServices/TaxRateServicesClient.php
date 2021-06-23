<?php

namespace Heavymind\Oxatis\ApiClient\Services\TaxRateServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class TaxRateServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\TaxRateGetList $parameters
     * @return ResultInterface|Type\TaxRateGetListResponse
     * @throws SoapException
     */
    public function taxRateGetList(\Heavymind\Oxatis\ApiClient\Type\TaxRateGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\TaxRateGetListResponse
    {
        return $this->call('TaxRateGetList', $parameters);
    }


}

