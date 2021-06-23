<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class OrderGetManuallyConfirmed implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderPeriodEntity
     */
    private $OrderPeriod;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderPeriodEntity $OrderPeriod
     */
    public function __construct($WSIdentitySoap, $OrderPeriod)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OrderPeriod = $OrderPeriod;
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
     * @return OrderGetManuallyConfirmed
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderPeriodEntity
     */
    public function getOrderPeriod()
    {
        return $this->OrderPeriod;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderPeriodEntity $OrderPeriod
     * @return OrderGetManuallyConfirmed
     */
    public function withOrderPeriod($OrderPeriod)
    {
        $new = clone $this;
        $new->OrderPeriod = $OrderPeriod;

        return $new;
    }


}

