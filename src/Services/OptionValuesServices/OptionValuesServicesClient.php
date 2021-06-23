<?php

namespace Heavymind\Oxatis\ApiClient\Services\OptionValuesServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class OptionValuesServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\OptionValuesGet $parameters
     * @return ResultInterface|Type\OptionValuesGetResponse
     * @throws SoapException
     */
    public function optionValuesGet(\Heavymind\Oxatis\ApiClient\Type\OptionValuesGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\OptionValuesGetResponse
    {
        return $this->call('OptionValuesGet', $parameters);
    }


}

