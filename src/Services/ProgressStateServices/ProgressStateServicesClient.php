<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProgressStateServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ProgressStateServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ProgressStateGet $parameters
     * @return ResultInterface|Type\ProgressStateGetResponse
     * @throws SoapException
     */
    public function progressStateGet(\Heavymind\Oxatis\ApiClient\Type\ProgressStateGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProgressStateGetResponse
    {
        return $this->call('ProgressStateGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProgressStateGetList $parameters
     * @return ResultInterface|Type\ProgressStateGetListResponse
     * @throws SoapException
     */
    public function progressStateGetList(\Heavymind\Oxatis\ApiClient\Type\ProgressStateGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProgressStateGetListResponse
    {
        return $this->call('ProgressStateGetList', $parameters);
    }


}

