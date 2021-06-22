<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfOrderDetailEntityType
 *
 *
 * XSD Type: ArrayOfOrderDetailEntity
 */
class ArrayOfOrderDetailEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntityType[] $item
     */
    private $item = [
        
    ];

    /**
     * Adds as item
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntityType $item
     */
    public function addToItem(OrderDetailEntityType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntityType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntityType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }


}

