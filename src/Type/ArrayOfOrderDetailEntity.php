<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfOrderDetailEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntity
     */
    protected $Item;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->Item) ? $this->Item : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntity $Item
     * @return ArrayOfOrderDetailEntity
     */
    public function withItem($Item)
    {
        $new = clone $this;
        $new->Item = $Item;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntity
     */
    public function getItem()
    {
        return $this->Item;
    }


}

