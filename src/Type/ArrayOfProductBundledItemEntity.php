<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfProductBundledItemEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductBundledItemEntity
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
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductBundledItemEntity $BundledItem
     * @return ArrayOfProductBundledItemEntity
     */
    public function withBundledItem($BundledItem)
    {
        $new = clone $this;
        $new->BundledItem = $BundledItem;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductBundledItemEntity
     */
    public function getBundledItem()
    {
        return $this->BundledItem;
    }


}

