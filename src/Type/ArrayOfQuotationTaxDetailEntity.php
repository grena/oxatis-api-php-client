<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfQuotationTaxDetailEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationTaxDetailEntity
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
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationTaxDetailEntity $Item
     * @return ArrayOfQuotationTaxDetailEntity
     */
    public function withItem($Item)
    {
        $new = clone $this;
        $new->Item = $Item;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationTaxDetailEntity
     */
    public function getItem()
    {
        return $this->Item;
    }


}

