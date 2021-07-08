<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfPaymentTypeEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity
     */
    protected $PaymentTypeID;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->PaymentTypeID) ? $this->PaymentTypeID : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity $PaymentTypeID
     * @return ArrayOfPaymentTypeEntity
     */
    public function withPaymentTypeID($PaymentTypeID)
    {
        $new = clone $this;
        $new->PaymentTypeID = $PaymentTypeID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity
     */
    public function getPaymentTypeID()
    {
        return $this->PaymentTypeID;
    }


}

