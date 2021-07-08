<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderItemBO extends OrderItemBOBase
{

    /**
     * @var int
     */
    protected $Quantity;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return OrderItemBO
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }


}

