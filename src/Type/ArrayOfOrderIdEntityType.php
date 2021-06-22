<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfOrderIdEntityType
 *
 *
 * XSD Type: ArrayOfOrderIdEntity
 */
class ArrayOfOrderIdEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderIdEntityType[] $orderID
     */
    private $orderID = [
        
    ];

    /**
     * Adds as orderID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderIdEntityType $orderID
     */
    public function addToOrderID(OrderIdEntityType $orderID)
    {
        $this->orderID[] = $orderID;
        return $this;
    }

    /**
     * isset orderID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderID($index)
    {
        return isset($this->orderID[$index]);
    }

    /**
     * unset orderID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderID($index)
    {
        unset($this->orderID[$index]);
    }

    /**
     * Gets as orderID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderIdEntityType[]
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderIdEntityType[] $orderID
     * @return self
     */
    public function setOrderID(array $orderID = null)
    {
        $this->orderID = $orderID;
        return $this;
    }


}

