<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfOrderSummaryEntityType
 *
 *
 * XSD Type: ArrayOfOrderSummaryEntity
 */
class ArrayOfOrderSummaryEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntityType[] $orderSummary
     */
    private $orderSummary = [
        
    ];

    /**
     * Adds as orderSummary
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntityType $orderSummary
     */
    public function addToOrderSummary(OrderSummaryEntityType $orderSummary)
    {
        $this->orderSummary[] = $orderSummary;
        return $this;
    }

    /**
     * isset orderSummary
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderSummary($index)
    {
        return isset($this->orderSummary[$index]);
    }

    /**
     * unset orderSummary
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderSummary($index)
    {
        unset($this->orderSummary[$index]);
    }

    /**
     * Gets as orderSummary
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntityType[]
     */
    public function getOrderSummary()
    {
        return $this->orderSummary;
    }

    /**
     * Sets a new orderSummary
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntityType[] $orderSummary
     * @return self
     */
    public function setOrderSummary(array $orderSummary = null)
    {
        $this->orderSummary = $orderSummary;
        return $this;
    }


}

