<?php

namespace Heavymind\Oxatis\ApiClient\Services\IdentityServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class IdentityServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\AccountPropertiesGet $parameters
     * @return ResultInterface|Type\AccountPropertiesGetResponse
     * @throws SoapException
     */
    public function accountPropertiesGet(\Heavymind\Oxatis\ApiClient\Type\AccountPropertiesGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\AccountPropertiesGetResponse
    {
        return $this->call('AccountPropertiesGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\AccountSettingGet $parameters
     * @return ResultInterface|Type\AccountSettingGetResponse
     * @throws SoapException
     */
    public function accountSettingGet(\Heavymind\Oxatis\ApiClient\Type\AccountSettingGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\AccountSettingGetResponse
    {
        return $this->call('AccountSettingGet', $parameters);
    }


}

