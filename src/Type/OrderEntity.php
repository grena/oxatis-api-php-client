<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderEntity extends \Heavymind\Oxatis\ApiClient\Type\OrderBaseEntity
{

    /**
     * @var int
     */
    protected $TotalWeight;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderDetailEntity
     */
    protected $OrderItems;

    /**
     * @return int
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }

    /**
     * @param int $TotalWeight
     * @return OrderEntity
     */
    public function withTotalWeight($TotalWeight)
    {
        $new = clone $this;
        $new->TotalWeight = $TotalWeight;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderDetailEntity
     */
    public function getOrderItems()
    {
        return $this->OrderItems;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderDetailEntity $OrderItems
     * @return OrderEntity
     */
    public function withOrderItems($OrderItems)
    {
        $new = clone $this;
        $new->OrderItems = $OrderItems;

        return $new;
    }


}

