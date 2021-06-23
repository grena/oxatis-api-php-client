<?php

namespace Heavymind\Oxatis\ApiClient\Services\OrderServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class OrderServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\OrderUpdateTracking $parameters
     * @return ResultInterface|Type\OrderUpdateTrackingResponse
     * @throws SoapException
     */
    public function orderUpdateTracking(\Heavymind\Oxatis\ApiClient\Type\OrderUpdateTracking $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderUpdateTrackingResponse
    {
        return $this->call('OrderUpdateTracking', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderUpdateLogisticsServiceProvider $parameters
     * @return ResultInterface|Type\OrderUpdateLogisticsServiceProviderResponse
     * @throws SoapException
     */
    public function orderUpdateLogisticsServiceProvider(\Heavymind\Oxatis\ApiClient\Type\OrderUpdateLogisticsServiceProvider $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderUpdateLogisticsServiceProviderResponse
    {
        return $this->call('OrderUpdateLogisticsServiceProvider', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderUpdateTransportInfo $parameters
     * @return ResultInterface|Type\OrderUpdateTransportInfoResponse
     * @throws SoapException
     */
    public function orderUpdateTransportInfo(\Heavymind\Oxatis\ApiClient\Type\OrderUpdateTransportInfo $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderUpdateTransportInfoResponse
    {
        return $this->call('OrderUpdateTransportInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderUpdateValidation $parameters
     * @return ResultInterface|Type\OrderUpdateValidationResponse
     * @throws SoapException
     */
    public function orderUpdateValidation(\Heavymind\Oxatis\ApiClient\Type\OrderUpdateValidation $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderUpdateValidationResponse
    {
        return $this->call('OrderUpdateValidation', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderDelete $parameters
     * @return ResultInterface|Type\OrderDeleteResponse
     * @throws SoapException
     */
    public function orderDelete(\Heavymind\Oxatis\ApiClient\Type\OrderDelete $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderDeleteResponse
    {
        return $this->call('OrderDelete', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderGet $parameters
     * @return ResultInterface|Type\OrderGetResponse
     * @throws SoapException
     */
    public function orderGet(\Heavymind\Oxatis\ApiClient\Type\OrderGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderGetResponse
    {
        return $this->call('OrderGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderGetDetails $parameters
     * @return ResultInterface|Type\OrderGetDetailsResponse
     * @throws SoapException
     */
    public function orderGetDetails(\Heavymind\Oxatis\ApiClient\Type\OrderGetDetails $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderGetDetailsResponse
    {
        return $this->call('OrderGetDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderGetMoreDetails $parameters
     * @return ResultInterface|Type\OrderGetMoreDetailsResponse
     * @throws SoapException
     */
    public function orderGetMoreDetails(\Heavymind\Oxatis\ApiClient\Type\OrderGetMoreDetails $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderGetMoreDetailsResponse
    {
        return $this->call('OrderGetMoreDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderGetBySourceID $parameters
     * @return ResultInterface|Type\OrderGetBySourceIDResponse
     * @throws SoapException
     */
    public function orderGetBySourceID(\Heavymind\Oxatis\ApiClient\Type\OrderGetBySourceID $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderGetBySourceIDResponse
    {
        return $this->call('OrderGetBySourceID', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderGetList $parameters
     * @return ResultInterface|Type\OrderGetListResponse
     * @throws SoapException
     */
    public function orderGetList(\Heavymind\Oxatis\ApiClient\Type\OrderGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderGetListResponse
    {
        return $this->call('OrderGetList', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderGetSummaryList $parameters
     * @return ResultInterface|Type\OrderGetSummaryListResponse
     * @throws SoapException
     */
    public function orderGetSummaryList(\Heavymind\Oxatis\ApiClient\Type\OrderGetSummaryList $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderGetSummaryListResponse
    {
        return $this->call('OrderGetSummaryList', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderCount $parameters
     * @return ResultInterface|Type\OrderCountResponse
     * @throws SoapException
     */
    public function orderCount(\Heavymind\Oxatis\ApiClient\Type\OrderCount $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderCountResponse
    {
        return $this->call('OrderCount', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderAdd $parameters
     * @return ResultInterface|Type\OrderAddResponse
     * @throws SoapException
     */
    public function orderAdd(\Heavymind\Oxatis\ApiClient\Type\OrderAdd $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderAddResponse
    {
        return $this->call('OrderAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderPaymentRequest $parameters
     * @return ResultInterface|Type\OrderPaymentRequestResponse
     * @throws SoapException
     */
    public function orderPaymentRequest(\Heavymind\Oxatis\ApiClient\Type\OrderPaymentRequest $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderPaymentRequestResponse
    {
        return $this->call('OrderPaymentRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrderGetManuallyConfirmed $parameters
     * @return ResultInterface|Type\OrderGetManuallyConfirmedResponse
     * @throws SoapException
     */
    public function orderGetManuallyConfirmed(\Heavymind\Oxatis\ApiClient\Type\OrderGetManuallyConfirmed $parameters) : \Heavymind\Oxatis\ApiClient\Type\OrderGetManuallyConfirmedResponse
    {
        return $this->call('OrderGetManuallyConfirmed', $parameters);
    }


}

