<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfSalesRepIdEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntity
     */
    protected $SalesRepID;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->SalesRepID) ? $this->SalesRepID : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntity $SalesRepID
     * @return ArrayOfSalesRepIdEntity
     */
    public function withSalesRepID($SalesRepID)
    {
        $new = clone $this;
        $new->SalesRepID = $SalesRepID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntity
     */
    public function getSalesRepID()
    {
        return $this->SalesRepID;
    }


}

