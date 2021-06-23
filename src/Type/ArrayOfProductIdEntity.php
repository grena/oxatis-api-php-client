<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfProductIdEntity implements IteratorAggregate, Traversable
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    private $ProductID;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->ProductID) ? $this->ProductID : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity $ProductID
     * @return ArrayOfProductIdEntity
     */
    public function withProductID($ProductID)
    {
        $new = clone $this;
        $new->ProductID = $ProductID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    public function getProductID()
    {
        return $this->ProductID;
    }


}

