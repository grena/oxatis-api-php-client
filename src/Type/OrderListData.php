<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderListEntity
     */
    private $OrderList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderListEntity
     */
    public function getOrderList()
    {
        return $this->OrderList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderListEntity $OrderList
     * @return OrderListData
     */
    public function withOrderList($OrderList)
    {
        $new = clone $this;
        $new->OrderList = $OrderList;

        return $new;
    }


}

