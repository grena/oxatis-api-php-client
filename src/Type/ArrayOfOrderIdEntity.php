<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfOrderIdEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity
     */
    protected $OrderID;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity
     */
    protected $Order;

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity $OrderID
     * @return ArrayOfOrderIdEntity
     */
    public function withOrderID($OrderID)
    {
        $new = clone $this;
        $new->OrderID = $OrderID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->Order) ? $this->Order : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity $Order
     * @return ArrayOfOrderIdEntity
     */
    public function withOrder($Order)
    {
        $new = clone $this;
        $new->Order = $Order;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity
     */
    public function getOrder()
    {
        return $this->Order;
    }


}

