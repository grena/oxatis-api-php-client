<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class OrderGetSummaryList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListEntity
     */
    private $OrderSummaryList;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListEntity $OrderSummaryList
     */
    public function __construct($WSIdentitySoap, $OrderSummaryList)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OrderSummaryList = $OrderSummaryList;
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
     * @return OrderGetSummaryList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListEntity
     */
    public function getOrderSummaryList()
    {
        return $this->OrderSummaryList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListEntity $OrderSummaryList
     * @return OrderGetSummaryList
     */
    public function withOrderSummaryList($OrderSummaryList)
    {
        $new = clone $this;
        $new->OrderSummaryList = $OrderSummaryList;

        return $new;
    }


}

