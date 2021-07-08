<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfTax implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\Tax
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
     * @param \Heavymind\Oxatis\ApiClient\Type\Tax $TaxAmount
     * @return ArrayOfTax
     */
    public function withTaxAmount($TaxAmount)
    {
        $new = clone $this;
        $new->TaxAmount = $TaxAmount;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\Tax
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }


}

