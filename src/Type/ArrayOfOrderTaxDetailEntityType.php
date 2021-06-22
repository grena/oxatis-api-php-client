<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfOrderTaxDetailEntityType
 *
 *
 * XSD Type: ArrayOfOrderTaxDetailEntity
 */
class ArrayOfOrderTaxDetailEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntityType[] $item
     */
    private $item = [
        
    ];

    /**
     * Adds as item
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntityType $item
     */
    public function addToItem(OrderTaxDetailEntityType $item)
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
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntityType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntityType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }


}
