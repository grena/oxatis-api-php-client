<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrderGetMoreDetails implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity
     */
    protected $OrderId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity $OrderId
     */
    public function __construct($WSIdentitySoap, $OrderId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OrderId = $OrderId;
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
     * @return OrderGetMoreDetails
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity $OrderId
     * @return OrderGetMoreDetails
     */
    public function withOrderId($OrderId)
    {
        $new = clone $this;
        $new->OrderId = $OrderId;

        return $new;
    }


}

