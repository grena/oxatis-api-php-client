<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderBO extends OrderBOBase
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderItemBO
     */
    protected $OrderItemArray;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderItemBO
     */
    public function getOrderItemArray()
    {
        return $this->OrderItemArray;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderItemBO $OrderItemArray
     * @return OrderBO
     */
    public function withOrderItemArray($OrderItemArray)
    {
        $new = clone $this;
        $new->OrderItemArray = $OrderItemArray;

        return $new;
    }


}

