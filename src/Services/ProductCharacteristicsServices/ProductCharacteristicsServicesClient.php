<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductCharacteristicsServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ProductCharacteristicsServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ProductCharacteristicsUpdate $parameters
     * @return ResultInterface|Type\ProductCharacteristicsUpdateResponse
     * @throws SoapException
     */
    public function productCharacteristicsUpdate(\Heavymind\Oxatis\ApiClient\Type\ProductCharacteristicsUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductCharacteristicsUpdateResponse
    {
        return $this->call('ProductCharacteristicsUpdate', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductCharacteristicsBatchUpdate $parameters
     * @return ResultInterface|Type\ProductCharacteristicsBatchUpdateResponse
     * @throws SoapException
     */
    public function productCharacteristicsBatchUpdate(\Heavymind\Oxatis\ApiClient\Type\ProductCharacteristicsBatchUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductCharacteristicsBatchUpdateResponse
    {
        return $this->call('ProductCharacteristicsBatchUpdate', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductCharacteristicsGet $parameters
     * @return ResultInterface|Type\ProductCharacteristicsGetResponse
     * @throws SoapException
     */
    public function productCharacteristicsGet(\Heavymind\Oxatis\ApiClient\Type\ProductCharacteristicsGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductCharacteristicsGetResponse
    {
        return $this->call('ProductCharacteristicsGet', $parameters);
    }


}

