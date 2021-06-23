<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfOrderDetailBundledItemEntity implements IteratorAggregate, Traversable
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderDetailBundledItemEntity
     */
    private $BundledItem;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->BundledItem) ? $this->BundledItem : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderDetailBundledItemEntity $BundledItem
     * @return ArrayOfOrderDetailBundledItemEntity
     */
    public function withBundledItem($BundledItem)
    {
        $new = clone $this;
        $new->BundledItem = $BundledItem;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderDetailBundledItemEntity
     */
    public function getBundledItem()
    {
        return $this->BundledItem;
    }


}

