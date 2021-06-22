<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfOrderProgressStateHistoryEntityType
 *
 *
 * XSD Type: ArrayOfOrderProgressStateHistoryEntity
 */
class ArrayOfOrderProgressStateHistoryEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntityType[] $orderProgressStateHistoryEntity
     */
    private $orderProgressStateHistoryEntity = [
        
    ];

    /**
     * Adds as orderProgressStateHistoryEntity
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntityType $orderProgressStateHistoryEntity
     */
    public function addToOrderProgressStateHistoryEntity(OrderProgressStateHistoryEntityType $orderProgressStateHistoryEntity)
    {
        $this->orderProgressStateHistoryEntity[] = $orderProgressStateHistoryEntity;
        return $this;
    }

    /**
     * isset orderProgressStateHistoryEntity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderProgressStateHistoryEntity($index)
    {
        return isset($this->orderProgressStateHistoryEntity[$index]);
    }

    /**
     * unset orderProgressStateHistoryEntity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderProgressStateHistoryEntity($index)
    {
        unset($this->orderProgressStateHistoryEntity[$index]);
    }

    /**
     * Gets as orderProgressStateHistoryEntity
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntityType[]
     */
    public function getOrderProgressStateHistoryEntity()
    {
        return $this->orderProgressStateHistoryEntity;
    }

    /**
     * Sets a new orderProgressStateHistoryEntity
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntityType[] $orderProgressStateHistoryEntity
     * @return self
     */
    public function setOrderProgressStateHistoryEntity(array $orderProgressStateHistoryEntity = null)
    {
        $this->orderProgressStateHistoryEntity = $orderProgressStateHistoryEntity;
        return $this;
    }


}

