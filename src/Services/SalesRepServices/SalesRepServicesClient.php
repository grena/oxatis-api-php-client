<?php

namespace Heavymind\Oxatis\ApiClient\Services\SalesRepServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class SalesRepServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\SalesRepAdd $parameters
     * @return ResultInterface|Type\SalesRepAddResponse
     * @throws SoapException
     */
    public function salesRepAdd(\Heavymind\Oxatis\ApiClient\Type\SalesRepAdd $parameters) : \Heavymind\Oxatis\ApiClient\Type\SalesRepAddResponse
    {
        return $this->call('SalesRepAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\SalesRepDelete $parameters
     * @return ResultInterface|Type\SalesRepDeleteResponse
     * @throws SoapException
     */
    public function salesRepDelete(\Heavymind\Oxatis\ApiClient\Type\SalesRepDelete $parameters) : \Heavymind\Oxatis\ApiClient\Type\SalesRepDeleteResponse
    {
        return $this->call('SalesRepDelete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SalesRepGet $parameters
     * @return ResultInterface|Type\SalesRepGetResponse
     * @throws SoapException
     */
    public function salesRepGet(\Heavymind\Oxatis\ApiClient\Type\SalesRepGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\SalesRepGetResponse
    {
        return $this->call('SalesRepGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\SalesRepGetList $parameters
     * @return ResultInterface|Type\SalesRepGetListResponse
     * @throws SoapException
     */
    public function salesRepGetList(\Heavymind\Oxatis\ApiClient\Type\SalesRepGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\SalesRepGetListResponse
    {
        return $this->call('SalesRepGetList', $parameters);
    }

    /**
     * @param RequestInterface|Type\SalesRepImport $parameters
     * @return ResultInterface|Type\SalesRepImportResponse
     * @throws SoapException
     */
    public function salesRepImport(\Heavymind\Oxatis\ApiClient\Type\SalesRepImport $parameters) : \Heavymind\Oxatis\ApiClient\Type\SalesRepImportResponse
    {
        return $this->call('SalesRepImport', $parameters);
    }

    /**
     * @param RequestInterface|Type\SalesRepUpdate $parameters
     * @return ResultInterface|Type\SalesRepUpdateResponse
     * @throws SoapException
     */
    public function salesRepUpdate(\Heavymind\Oxatis\ApiClient\Type\SalesRepUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\SalesRepUpdateResponse
    {
        return $this->call('SalesRepUpdate', $parameters);
    }


}

