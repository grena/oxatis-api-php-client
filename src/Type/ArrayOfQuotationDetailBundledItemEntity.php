<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfQuotationDetailBundledItemEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationDetailBundledItemEntity
     */
    protected $BundledItem;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->BundledItem) ? $this->BundledItem : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationDetailBundledItemEntity $BundledItem
     * @return ArrayOfQuotationDetailBundledItemEntity
     */
    public function withBundledItem($BundledItem)
    {
        $new = clone $this;
        $new->BundledItem = $BundledItem;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationDetailBundledItemEntity
     */
    public function getBundledItem()
    {
        return $this->BundledItem;
    }


}

