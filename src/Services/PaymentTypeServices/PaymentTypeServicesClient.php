<?php

namespace Heavymind\Oxatis\ApiClient\Services\PaymentTypeServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class PaymentTypeServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\PaymentTypeGet $parameters
     * @return ResultInterface|Type\PaymentTypeGetResponse
     * @throws SoapException
     */
    public function paymentTypeGet(\Heavymind\Oxatis\ApiClient\Type\PaymentTypeGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\PaymentTypeGetResponse
    {
        return $this->call('PaymentTypeGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\PaymentTypeGetList $parameters
     * @return ResultInterface|Type\PaymentTypeGetListResponse
     * @throws SoapException
     */
    public function paymentTypeGetList(\Heavymind\Oxatis\ApiClient\Type\PaymentTypeGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\PaymentTypeGetListResponse
    {
        return $this->call('PaymentTypeGetList', $parameters);
    }


}

