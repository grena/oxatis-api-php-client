<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfOxatisEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    protected $UpSellItem;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    protected $OxID;

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OxatisEntity $UpSellItem
     * @return ArrayOfOxatisEntity
     */
    public function withUpSellItem($UpSellItem)
    {
        $new = clone $this;
        $new->UpSellItem = $UpSellItem;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    public function getUpSellItem()
    {
        return $this->UpSellItem;
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->OxID) ? $this->OxID : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OxatisEntity $OxID
     * @return ArrayOfOxatisEntity
     */
    public function withOxID($OxID)
    {
        $new = clone $this;
        $new->OxID = $OxID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    public function getOxID()
    {
        return $this->OxID;
    }


}

