<?php

namespace Heavymind\Oxatis\ApiClient\Services\QuotationServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class QuotationServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\QuotationDelete $parameters
     * @return ResultInterface|Type\QuotationDeleteResponse
     * @throws SoapException
     */
    public function quotationDelete(\Heavymind\Oxatis\ApiClient\Type\QuotationDelete $parameters) : \Heavymind\Oxatis\ApiClient\Type\QuotationDeleteResponse
    {
        return $this->call('QuotationDelete', $parameters);
    }

    /**
     * @param RequestInterface|Type\QuotationGet $parameters
     * @return ResultInterface|Type\QuotationGetResponse
     * @throws SoapException
     */
    public function quotationGet(\Heavymind\Oxatis\ApiClient\Type\QuotationGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\QuotationGetResponse
    {
        return $this->call('QuotationGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\QuotationGetDetails $parameters
     * @return ResultInterface|Type\QuotationGetDetailsResponse
     * @throws SoapException
     */
    public function quotationGetDetails(\Heavymind\Oxatis\ApiClient\Type\QuotationGetDetails $parameters) : \Heavymind\Oxatis\ApiClient\Type\QuotationGetDetailsResponse
    {
        return $this->call('QuotationGetDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\QuotationGetMoreDetails $parameters
     * @return ResultInterface|Type\QuotationGetMoreDetailsResponse
     * @throws SoapException
     */
    public function quotationGetMoreDetails(\Heavymind\Oxatis\ApiClient\Type\QuotationGetMoreDetails $parameters) : \Heavymind\Oxatis\ApiClient\Type\QuotationGetMoreDetailsResponse
    {
        return $this->call('QuotationGetMoreDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\QuotationGetList $parameters
     * @return ResultInterface|Type\QuotationGetListResponse
     * @throws SoapException
     */
    public function quotationGetList(\Heavymind\Oxatis\ApiClient\Type\QuotationGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\QuotationGetListResponse
    {
        return $this->call('QuotationGetList', $parameters);
    }

    /**
     * @param RequestInterface|Type\QuotationGetSummaryList $parameters
     * @return ResultInterface|Type\QuotationGetSummaryListResponse
     * @throws SoapException
     */
    public function quotationGetSummaryList(\Heavymind\Oxatis\ApiClient\Type\QuotationGetSummaryList $parameters) : \Heavymind\Oxatis\ApiClient\Type\QuotationGetSummaryListResponse
    {
        return $this->call('QuotationGetSummaryList', $parameters);
    }

    /**
     * @param RequestInterface|Type\QuotationCount $parameters
     * @return ResultInterface|Type\QuotationCountResponse
     * @throws SoapException
     */
    public function quotationCount(\Heavymind\Oxatis\ApiClient\Type\QuotationCount $parameters) : \Heavymind\Oxatis\ApiClient\Type\QuotationCountResponse
    {
        return $this->call('QuotationCount', $parameters);
    }


}

