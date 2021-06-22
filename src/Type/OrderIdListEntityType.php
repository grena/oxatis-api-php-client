<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderIdListEntityType
 *
 *
 * XSD Type: OrderIdListEntity
 */
class OrderIdListEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderIdEntityType[] $orderIDs
     */
    private $orderIDs = null;

    /**
     * Adds as orderID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderIdEntityType $orderID
     */
    public function addToOrderIDs(OrderIdEntityType $orderID)
    {
        $this->orderIDs[] = $orderID;
        return $this;
    }

    /**
     * isset orderIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderIDs($index)
    {
        return isset($this->orderIDs[$index]);
    }

    /**
     * unset orderIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderIDs($index)
    {
        unset($this->orderIDs[$index]);
    }

    /**
     * Gets as orderIDs
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderIdEntityType[]
     */
    public function getOrderIDs()
    {
        return $this->orderIDs;
    }

    /**
     * Sets a new orderIDs
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderIdEntityType[] $orderIDs
     * @return self
     */
    public function setOrderIDs(array $orderIDs)
    {
        $this->orderIDs = $orderIDs;
        return $this;
    }


}

