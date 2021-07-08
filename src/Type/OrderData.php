<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderEntity
     */
    protected $Order;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderEntity
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderEntity $Order
     * @return OrderData
     */
    public function withOrder($Order)
    {
        $new = clone $this;
        $new->Order = $Order;

        return $new;
    }


}

