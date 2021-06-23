<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfOxatisEntity2 implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    private $LinkedItem;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->LinkedItem) ? $this->LinkedItem : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OxatisEntity $LinkedItem
     * @return ArrayOfOxatisEntity2
     */
    public function withLinkedItem($LinkedItem)
    {
        $new = clone $this;
        $new->LinkedItem = $LinkedItem;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    public function getLinkedItem()
    {
        return $this->LinkedItem;
    }


}

