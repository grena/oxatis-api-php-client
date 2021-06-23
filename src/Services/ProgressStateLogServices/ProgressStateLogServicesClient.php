<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProgressStateLogServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ProgressStateLogServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetOrderProgressStateLogs $parameters
     * @return ResultInterface|Type\GetOrderProgressStateLogsResponse
     * @throws SoapException
     */
    public function getOrderProgressStateLogs(\Heavymind\Oxatis\ApiClient\Type\GetOrderProgressStateLogs $parameters) : \Heavymind\Oxatis\ApiClient\Type\GetOrderProgressStateLogsResponse
    {
        return $this->call('GetOrderProgressStateLogs', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetUpdatedOrderList $parameters
     * @return ResultInterface|Type\GetUpdatedOrderListResponse
     * @throws SoapException
     */
    public function getUpdatedOrderList(\Heavymind\Oxatis\ApiClient\Type\GetUpdatedOrderList $parameters) : \Heavymind\Oxatis\ApiClient\Type\GetUpdatedOrderListResponse
    {
        return $this->call('GetUpdatedOrderList', $parameters);
    }


}

