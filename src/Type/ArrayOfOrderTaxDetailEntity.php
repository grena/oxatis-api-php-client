<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfOrderTaxDetailEntity implements IteratorAggregate, Traversable
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntity
     */
    private $Item;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->Item) ? $this->Item : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntity $Item
     * @return ArrayOfOrderTaxDetailEntity
     */
    public function withItem($Item)
    {
        $new = clone $this;
        $new->Item = $Item;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntity
     */
    public function getItem()
    {
        return $this->Item;
    }


}

