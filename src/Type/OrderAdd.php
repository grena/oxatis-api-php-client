<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class OrderAdd implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderBO
     */
    private $OrderAdd;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderBO $OrderAdd
     */
    public function __construct($WSIdentitySoap, $OrderAdd)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OrderAdd = $OrderAdd;
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
     * @return OrderAdd
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderBO
     */
    public function getOrderAdd()
    {
        return $this->OrderAdd;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderBO $OrderAdd
     * @return OrderAdd
     */
    public function withOrderAdd($OrderAdd)
    {
        $new = clone $this;
        $new->OrderAdd = $OrderAdd;

        return $new;
    }


}

