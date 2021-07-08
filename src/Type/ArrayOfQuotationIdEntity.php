<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfQuotationIdEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationIdEntity
     */
    protected $QuotationID;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->QuotationID) ? $this->QuotationID : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationIdEntity $QuotationID
     * @return ArrayOfQuotationIdEntity
     */
    public function withQuotationID($QuotationID)
    {
        $new = clone $this;
        $new->QuotationID = $QuotationID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationIdEntity
     */
    public function getQuotationID()
    {
        return $this->QuotationID;
    }


}

