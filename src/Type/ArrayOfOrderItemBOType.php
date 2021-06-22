<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfOrderItemBOType
 *
 *
 * XSD Type: ArrayOfOrderItemBO
 */
class ArrayOfOrderItemBOType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderItemBOType[] $orderItem
     */
    private $orderItem = [
        
    ];

    /**
     * Adds as orderItem
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderItemBOType $orderItem
     */
    public function addToOrderItem(OrderItemBOType $orderItem)
    {
        $this->orderItem[] = $orderItem;
        return $this;
    }

    /**
     * isset orderItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderItem($index)
    {
        return isset($this->orderItem[$index]);
    }

    /**
     * unset orderItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderItem($index)
    {
        unset($this->orderItem[$index]);
    }

    /**
     * Gets as orderItem
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderItemBOType[]
     */
    public function getOrderItem()
    {
        return $this->orderItem;
    }

    /**
     * Sets a new orderItem
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderItemBOType[] $orderItem
     * @return self
     */
    public function setOrderItem(array $orderItem = null)
    {
        $this->orderItem = $orderItem;
        return $this;
    }


}

