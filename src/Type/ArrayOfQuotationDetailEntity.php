<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfQuotationDetailEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationDetailEntity
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
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationDetailEntity $Item
     * @return ArrayOfQuotationDetailEntity
     */
    public function withItem($Item)
    {
        $new = clone $this;
        $new->Item = $Item;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationDetailEntity
     */
    public function getItem()
    {
        return $this->Item;
    }


}

