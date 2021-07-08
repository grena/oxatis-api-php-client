<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfTaxAmountEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxAmountEntity
     */
    protected $TaxAmount;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->TaxAmount) ? $this->TaxAmount : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxAmountEntity $TaxAmount
     * @return ArrayOfTaxAmountEntity
     */
    public function withTaxAmount($TaxAmount)
    {
        $new = clone $this;
        $new->TaxAmount = $TaxAmount;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxAmountEntity
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }


}

