<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderEntityType
 *
 *
 * XSD Type: OrderEntity
 */
class OrderEntityType extends OrderBaseEntityType
{

    /**
     * @var int $totalWeight
     */
    private $totalWeight = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntityType[] $orderItems
     */
    private $orderItems = null;

    /**
     * Gets as totalWeight
     *
     * @return int
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Sets a new totalWeight
     *
     * @param int $totalWeight
     * @return self
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntityType $item
     */
    public function addToOrderItems(OrderDetailEntityType $item)
    {
        $this->orderItems[] = $item;
        return $this;
    }

    /**
     * isset orderItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderItems($index)
    {
        return isset($this->orderItems[$index]);
    }

    /**
     * unset orderItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderItems($index)
    {
        unset($this->orderItems[$index]);
    }

    /**
     * Gets as orderItems
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntityType[]
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * Sets a new orderItems
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderDetailEntityType[] $orderItems
     * @return self
     */
    public function setOrderItems(array $orderItems)
    {
        $this->orderItems = $orderItems;
        return $this;
    }


}

