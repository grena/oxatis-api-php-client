<?php

namespace Heavymind\Oxatis\ApiClient\Services\ShippingTypeServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ShippingTypeServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ShippingTypeGet $parameters
     * @return ResultInterface|Type\ShippingTypeGetResponse
     * @throws SoapException
     */
    public function shippingTypeGet(\Heavymind\Oxatis\ApiClient\Type\ShippingTypeGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\ShippingTypeGetResponse
    {
        return $this->call('ShippingTypeGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\ShippingTypeAdd $parameters
     * @return ResultInterface|Type\ShippingTypeAddResponse
     * @throws SoapException
     */
    public function shippingTypeAdd(\Heavymind\Oxatis\ApiClient\Type\ShippingTypeAdd $parameters) : \Heavymind\Oxatis\ApiClient\Type\ShippingTypeAddResponse
    {
        return $this->call('ShippingTypeAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\ShippingTypeImport $parameters
     * @return ResultInterface|Type\ShippingTypeImportResponse
     * @throws SoapException
     */
    public function shippingTypeImport(\Heavymind\Oxatis\ApiClient\Type\ShippingTypeImport $parameters) : \Heavymind\Oxatis\ApiClient\Type\ShippingTypeImportResponse
    {
        return $this->call('ShippingTypeImport', $parameters);
    }

    /**
     * @param RequestInterface|Type\ShippingTypeUpdate $parameters
     * @return ResultInterface|Type\ShippingTypeUpdateResponse
     * @throws SoapException
     */
    public function shippingTypeUpdate(\Heavymind\Oxatis\ApiClient\Type\ShippingTypeUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\ShippingTypeUpdateResponse
    {
        return $this->call('ShippingTypeUpdate', $parameters);
    }

    /**
     * @param RequestInterface|Type\ShippingTypeDelete $parameters
     * @return ResultInterface|Type\ShippingTypeDeleteResponse
     * @throws SoapException
     */
    public function shippingTypeDelete(\Heavymind\Oxatis\ApiClient\Type\ShippingTypeDelete $parameters) : \Heavymind\Oxatis\ApiClient\Type\ShippingTypeDeleteResponse
    {
        return $this->call('ShippingTypeDelete', $parameters);
    }

    /**
     * @param RequestInterface|Type\ShippingTypeGetList $parameters
     * @return ResultInterface|Type\ShippingTypeGetListResponse
     * @throws SoapException
     */
    public function shippingTypeGetList(\Heavymind\Oxatis\ApiClient\Type\ShippingTypeGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\ShippingTypeGetListResponse
    {
        return $this->call('ShippingTypeGetList', $parameters);
    }


}

