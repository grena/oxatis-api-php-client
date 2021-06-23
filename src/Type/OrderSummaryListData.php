<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderSummaryListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListEntity
     */
    private $OrderSummaryList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListEntity
     */
    public function getOrderSummaryList()
    {
        return $this->OrderSummaryList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListEntity $OrderSummaryList
     * @return OrderSummaryListData
     */
    public function withOrderSummaryList($OrderSummaryList)
    {
        $new = clone $this;
        $new->OrderSummaryList = $OrderSummaryList;

        return $new;
    }


}

