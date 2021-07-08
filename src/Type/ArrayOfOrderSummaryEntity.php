<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfOrderSummaryEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntity
     */
    protected $OrderSummary;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->OrderSummary) ? $this->OrderSummary : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntity $OrderSummary
     * @return ArrayOfOrderSummaryEntity
     */
    public function withOrderSummary($OrderSummary)
    {
        $new = clone $this;
        $new->OrderSummary = $OrderSummary;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntity
     */
    public function getOrderSummary()
    {
        return $this->OrderSummary;
    }


}

