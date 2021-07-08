<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfShippingTypeEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity
     */
    protected $ShippingTypeID;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->ShippingTypeID) ? $this->ShippingTypeID : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity $ShippingTypeID
     * @return ArrayOfShippingTypeEntity
     */
    public function withShippingTypeID($ShippingTypeID)
    {
        $new = clone $this;
        $new->ShippingTypeID = $ShippingTypeID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity
     */
    public function getShippingTypeID()
    {
        return $this->ShippingTypeID;
    }


}

