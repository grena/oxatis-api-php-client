<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfOxatisEntity1 implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    private $CrossSellItem;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->CrossSellItem) ? $this->CrossSellItem : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OxatisEntity $CrossSellItem
     * @return ArrayOfOxatisEntity1
     */
    public function withCrossSellItem($CrossSellItem)
    {
        $new = clone $this;
        $new->CrossSellItem = $CrossSellItem;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    public function getCrossSellItem()
    {
        return $this->CrossSellItem;
    }


}

