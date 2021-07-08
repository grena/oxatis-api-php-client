<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class OrderUpdateLogisticsServiceProvider implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderLogisticsServiceProviderEntity
     */
    protected $LogisticsServiceProvider;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderLogisticsServiceProviderEntity $LogisticsServiceProvider
     */
    public function __construct($WSIdentitySoap, $LogisticsServiceProvider)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->LogisticsServiceProvider = $LogisticsServiceProvider;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    public function getWSIdentitySoap()
    {
        return $this->WSIdentitySoap;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @return OrderUpdateLogisticsServiceProvider
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderLogisticsServiceProviderEntity
     */
    public function getLogisticsServiceProvider()
    {
        return $this->LogisticsServiceProvider;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderLogisticsServiceProviderEntity $LogisticsServiceProvider
     * @return OrderUpdateLogisticsServiceProvider
     */
    public function withLogisticsServiceProvider($LogisticsServiceProvider)
    {
        $new = clone $this;
        $new->LogisticsServiceProvider = $LogisticsServiceProvider;

        return $new;
    }


}

