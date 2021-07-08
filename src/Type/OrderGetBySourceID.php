<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrderGetBySourceID implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderSourceEntity
     */
    protected $OrderSource;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderSourceEntity $OrderSource
     */
    public function __construct($WSIdentitySoap, $OrderSource)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OrderSource = $OrderSource;
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
     * @return OrderGetBySourceID
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderSourceEntity
     */
    public function getOrderSource()
    {
        return $this->OrderSource;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderSourceEntity $OrderSource
     * @return OrderGetBySourceID
     */
    public function withOrderSource($OrderSource)
    {
        $new = clone $this;
        $new->OrderSource = $OrderSource;

        return $new;
    }


}

