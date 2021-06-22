<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderProgressStateLogsEntityType
 *
 *
 * XSD Type: OrderProgressStateLogsEntity
 */
class OrderProgressStateLogsEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntityType[] $orderProgressStateLogs
     */
    private $orderProgressStateLogs = null;

    /**
     * Adds as orderProgressStateHistoryEntity
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntityType $orderProgressStateHistoryEntity
     */
    public function addToOrderProgressStateLogs(OrderProgressStateHistoryEntityType $orderProgressStateHistoryEntity)
    {
        $this->orderProgressStateLogs[] = $orderProgressStateHistoryEntity;
        return $this;
    }

    /**
     * isset orderProgressStateLogs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderProgressStateLogs($index)
    {
        return isset($this->orderProgressStateLogs[$index]);
    }

    /**
     * unset orderProgressStateLogs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderProgressStateLogs($index)
    {
        unset($this->orderProgressStateLogs[$index]);
    }

    /**
     * Gets as orderProgressStateLogs
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntityType[]
     */
    public function getOrderProgressStateLogs()
    {
        return $this->orderProgressStateLogs;
    }

    /**
     * Sets a new orderProgressStateLogs
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntityType[] $orderProgressStateLogs
     * @return self
     */
    public function setOrderProgressStateLogs(array $orderProgressStateLogs)
    {
        $this->orderProgressStateLogs = $orderProgressStateLogs;
        return $this;
    }


}

