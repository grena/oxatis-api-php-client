<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class OrderGetList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderListEntity
     */
    private $OrderList;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderListEntity $OrderList
     */
    public function __construct($WSIdentitySoap, $OrderList)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OrderList = $OrderList;
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
     * @return OrderGetList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderListEntity
     */
    public function getOrderList()
    {
        return $this->OrderList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderListEntity $OrderList
     * @return OrderGetList
     */
    public function withOrderList($OrderList)
    {
        $new = clone $this;
        $new->OrderList = $OrderList;

        return $new;
    }


}

