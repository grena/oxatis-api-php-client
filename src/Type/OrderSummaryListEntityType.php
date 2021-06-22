<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderSummaryListEntityType
 *
 *
 * XSD Type: OrderSummaryListEntity
 */
class OrderSummaryListEntityType extends OrderListHeaderEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntityType[] $orderSummaries
     */
    private $orderSummaries = null;

    /**
     * Adds as orderSummary
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntityType $orderSummary
     */
    public function addToOrderSummaries(OrderSummaryEntityType $orderSummary)
    {
        $this->orderSummaries[] = $orderSummary;
        return $this;
    }

    /**
     * isset orderSummaries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderSummaries($index)
    {
        return isset($this->orderSummaries[$index]);
    }

    /**
     * unset orderSummaries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderSummaries($index)
    {
        unset($this->orderSummaries[$index]);
    }

    /**
     * Gets as orderSummaries
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntityType[]
     */
    public function getOrderSummaries()
    {
        return $this->orderSummaries;
    }

    /**
     * Sets a new orderSummaries
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntityType[] $orderSummaries
     * @return self
     */
    public function setOrderSummaries(array $orderSummaries)
    {
        $this->orderSummaries = $orderSummaries;
        return $this;
    }


}

