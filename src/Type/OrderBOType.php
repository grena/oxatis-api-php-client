<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderBOType
 *
 *
 * XSD Type: OrderBO
 */
class OrderBOType extends OrderBOBaseType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderItemBOType[] $orderItemArray
     */
    private $orderItemArray = null;

    /**
     * Adds as orderItem
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderItemBOType $orderItem
     */
    public function addToOrderItemArray(OrderItemBOType $orderItem)
    {
        $this->orderItemArray[] = $orderItem;
        return $this;
    }

    /**
     * isset orderItemArray
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderItemArray($index)
    {
        return isset($this->orderItemArray[$index]);
    }

    /**
     * unset orderItemArray
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderItemArray($index)
    {
        unset($this->orderItemArray[$index]);
    }

    /**
     * Gets as orderItemArray
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderItemBOType[]
     */
    public function getOrderItemArray()
    {
        return $this->orderItemArray;
    }

    /**
     * Sets a new orderItemArray
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderItemBOType[] $orderItemArray
     * @return self
     */
    public function setOrderItemArray(array $orderItemArray)
    {
        $this->orderItemArray = $orderItemArray;
        return $this;
    }


}

