<?php

namespace Heavymind\Oxatis\ApiClient\Services\OptionTypesServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class OptionTypesServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\OptionTypesGet $parameters
     * @return ResultInterface|Type\OptionTypesGetResponse
     * @throws SoapException
     */
    public function optionTypesGet(\Heavymind\Oxatis\ApiClient\Type\OptionTypesGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\OptionTypesGetResponse
    {
        return $this->call('OptionTypesGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\OptionTypesGetDetail $parameters
     * @return ResultInterface|Type\OptionTypesGetDetailResponse
     * @throws SoapException
     */
    public function optionTypesGetDetail(\Heavymind\Oxatis\ApiClient\Type\OptionTypesGetDetail $parameters) : \Heavymind\Oxatis\ApiClient\Type\OptionTypesGetDetailResponse
    {
        return $this->call('OptionTypesGetDetail', $parameters);
    }

    /**
     * @param RequestInterface|Type\OptionTypesGetList $parameters
     * @return ResultInterface|Type\OptionTypesGetListResponse
     * @throws SoapException
     */
    public function optionTypesGetList(\Heavymind\Oxatis\ApiClient\Type\OptionTypesGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\OptionTypesGetListResponse
    {
        return $this->call('OptionTypesGetList', $parameters);
    }


}

