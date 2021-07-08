<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfTaxRateEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxRateEntity
     */
    protected $TaxRateID;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->TaxRateID) ? $this->TaxRateID : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRateEntity $TaxRateID
     * @return ArrayOfTaxRateEntity
     */
    public function withTaxRateID($TaxRateID)
    {
        $new = clone $this;
        $new->TaxRateID = $TaxRateID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxRateEntity
     */
    public function getTaxRateID()
    {
        return $this->TaxRateID;
    }


}

