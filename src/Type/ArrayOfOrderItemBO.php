<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfOrderItemBO implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderItemBO
     */
    protected $OrderItem;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->OrderItem) ? $this->OrderItem : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderItemBO $OrderItem
     * @return ArrayOfOrderItemBO
     */
    public function withOrderItem($OrderItem)
    {
        $new = clone $this;
        $new->OrderItem = $OrderItem;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderItemBO
     */
    public function getOrderItem()
    {
        return $this->OrderItem;
    }


}

